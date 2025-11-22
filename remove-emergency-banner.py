#!/usr/bin/env python3
"""Remove emergency banner div from all HTML files"""

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

        # Check if file has emergency banner
        if 'emergency-banner' in content:
            # Remove emergency banner lines
            original = content
            # Remove the entire emergency banner comment and div
            content = re.sub(
                r'\s*<!-- Emergency Banner.*?-->\s*<div id="emergency-banner"[^>]*>.*?</div>\s*',
                '\n',
                content,
                flags=re.DOTALL
            )

            if content != original:
                with open(html_file, 'w', encoding='utf-8') as f:
                    f.write(content)
                print(f"✓ Removed emergency banner from: {html_file}")
                cleaned_count += 1
    except Exception as e:
        print(f"✗ Error processing {html_file}: {e}")

print(f"\nRemoved emergency banner from {cleaned_count} files")
