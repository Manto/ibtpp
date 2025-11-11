#!/usr/bin/env python3
"""Remove any remaining PHP tags from HTML files"""

import glob
import re

# Find all HTML files
html_files = glob.glob('**/*.html', recursive=True)

# Exclude directories
exclude_dirs = ['fm/', 'plugins/', 'vdsbackup/']

cleaned_count = 0

for html_file in html_files:
    # Skip excluded directories
    if any(excluded in html_file for excluded in exclude_dirs):
        continue

    try:
        with open(html_file, 'r', encoding='utf-8') as f:
            content = f.read()

        # Check if file has PHP tags
        if '<?php' in content or '<?=' in content:
            # Remove PHP tags
            original = content
            content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)
            content = re.sub(r'<\?=.*?\?>', '', content, flags=re.DOTALL)

            if content != original:
                with open(html_file, 'w', encoding='utf-8') as f:
                    f.write(content)
                print(f"✓ Cleaned: {html_file}")
                cleaned_count += 1
    except Exception as e:
        print(f"✗ Error processing {html_file}: {e}")

print(f"\nCleaned {cleaned_count} files")
