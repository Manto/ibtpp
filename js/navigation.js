/**
 * Modern Navigation System for IBTPP Website
 * Replaces legacy Tigra Menu system
 */

(function() {
    'use strict';

    // Menu structure - converted from menu_items.js
    const MENU_ITEMS = [
        {
            title: 'General Info',
            items: [
                { title: 'What is BabyBIG<sup>&reg;</sup>?', url: '/general/babybig.html' },
                { title: 'FAQs', url: '/general/faq.html' }
            ]
        },
        {
            title: 'For Physicians',
            items: [
                { title: 'How&nbsp;to&nbsp;obtain&nbsp;Clinical&nbsp;Consultation&nbsp;and&nbsp;Order&nbsp;BabyBIG<sup>&reg;</sup>', url: '/physician/obtain.html' },
                { title: 'Information for Clinicians', url: 'https://www.cdc.gov/botulism/hcp/clinical-overview/infant-botulism.html' },
                { title: 'Clinical Diagnosis', url: '/physician/clinical.html' },
                { title: 'Patient Management', url: '/physician/patient.html' },
                { title: 'Laboratory Diagnosis', url: '/physician/laboratory.html' },
                { title: 'FAQs', url: '/general/faq.html' },
                { title: 'Medical Literature', url: '/readings/medical.html' }
            ]
        },
        {
            title: 'For Pharmacists',
            items: [
                { title: 'Instructions for use of BabyBIG<sup>&reg;</sup>', url: '/pharmacist/instruction.html' },
                { title: 'Dosage and Administration', url: '/pharmacist/dosage.html' },
                { title: 'FAQs', url: '/general/faq.html' }
            ]
        },
        {
            title: 'Lab Testing Info',
            items: [
                { title: 'Laboratory Diagnosis', url: '/laboratorian/laboratory.html' },
                { title: 'Specimen Collection', url: '/laboratorian/collection.html' },
                { title: 'Specimen Storage', url: '/laboratorian/storage.html' },
                { title: 'Specimen Submission (CA only)', url: '/laboratorian/submission.html' },
                { title: 'Specimen Submission form (CA only)', url: '/laboratorian/IB%20Diagnostic%20Specimen%20Submission%20Form.pdf' },
                { title: 'Lab Scientist FAQs', url: '/laboratorian/faq.html' },
                { title: 'Microbiology of <i>C. botulinum</i>', url: '/laboratorian/microbiology.html' },
                { title: 'CLIA Certificate', url: 'https://www.cdph.ca.gov/Programs/CID/DCDC/CDPH%20Document%20Library/MDLCLIACertification2022to2024.pdf' }
            ]
        },
        {
            title: 'For Parents',
            items: [
                { title: 'Prevention', url: '/parent/prevention.html' },
                { title: 'When to Avoid Honey', url: '/parent/honey.html' },
                { title: 'Parent Support Group', url: '/general/parent.html' },
                { title: 'FAQs', url: '/general/faq.html' }
            ]
        },
        {
            title: 'In Depth Information',
            items: [
                { title: 'Medical Literature', url: '/readings/medical.html' },
                { title: 'General FAQs', url: '/general/faq.html' },
                { title: 'Lab Scientist FAQs', url: '/laboratorian/faq.html' }
            ]
        },
        {
            title: '中文',
            items: [
                { title: 'BabyBIG®是什么？', url: '/general/babybig-zh.html' },
                { title: '医生信息-如何获得BabyBIG®', url: '/physician/obtain-zh.html' },
                { title: '医生信息-临床诊断', url: '/physician/clinical-zh.html' },
                { title: '医生信息-病人管理', url: '/physician/patient-zh.html' },
                { title: '医生信息-实验室诊断', url: '/physician/laboratory-zh.html' },
                { title: '肉毒梭状芽孢杆菌的微生物学', url: '/laboratorian/microbiology-zh.html' },
                { title: '药师信息- BabyBIG® 使用指南', url: '/pharmacist/instruction-zh.html' },
                { title: '家长信息-预防措施', url: '/parent/prevention-zh.html' },
                { title: '家长信息-何时避免食用蜂蜜 ', url: '/parent/honey-zh.html' },
                { title: '家长信息-家长交流群', url: '/general/parent-zh.html' },
                { title: '国际求助', url: '/contact/international-zh.html' },
                { title: '常见问题解答', url: '/general/faq-zh.html' },
                { title: '联系我们', url: '/contact/index-zh.html' }
            ]
        },
        {
            title: 'En Español',
            items: [
                { title: '¿Qué es BabyBIG®?', url: '/general/babybig-espanol.html' },
                { title: 'Prevención', url: '/parent/prevention-espanol.html' },
                { title: 'Cuándo Evitar la Miel', url: '/parent/honey-espanol.html' },
                { title: 'Diagnosis de laboratorio', url: '/physician/laboratory-espanol.html' },
                { title: 'Preguntas Frecuentes', url: '/general/faq-espanol.html' }
            ]
        },
        {
            title: 'International Inquiries',
            url: '/contact/international.html',
            items: []
        },
        {
            title: 'Contact Us',
            url: '/contact/index.html',
            items: []
        }
    ];

    /**
     * Generate navigation HTML
     */
    function generateNavigation() {
        const nav = document.querySelector('.main-nav ul.nav-menu');
        if (!nav) return;

        let html = '';

        MENU_ITEMS.forEach(item => {
            if (item.items && item.items.length > 0) {
                // Menu with dropdown
                html += `
                    <li>
                        <a href="#">${item.title}</a>
                        <ul class="dropdown">`;

                item.items.forEach(subItem => {
                    html += `<li><a href="${subItem.url}">${subItem.title}</a></li>`;
                });

                html += `
                        </ul>
                    </li>`;
            } else {
                // Simple menu item
                html += `<li><a href="${item.url}">${item.title}</a></li>`;
            }
        });

        nav.innerHTML = html;
    }

    /**
     * Mobile menu toggle
     */
    function initMobileMenu() {
        const toggle = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.nav-menu');

        if (!toggle || !menu) return;

        toggle.addEventListener('click', function() {
            menu.classList.toggle('active');

            // Update ARIA attributes
            const isExpanded = menu.classList.contains('active');
            toggle.setAttribute('aria-expanded', isExpanded);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.main-nav')) {
                menu.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && menu.classList.contains('active')) {
                menu.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.focus();
            }
        });
    }

    /**
     * Load emergency banner
     */
    function loadEmergencyBanner() {
        const bannerContainer = document.getElementById('emergency-banner');
        if (!bannerContainer) return;

        // Try to load emergency banner content
        fetch('/contact/emergency')
            .then(response => {
                if (response.ok) {
                    return response.text();
                }
                throw new Error('No emergency message');
            })
            .then(text => {
                const trimmedText = text.trim();
                if (trimmedText.length > 3) {
                    bannerContainer.innerHTML = trimmedText;
                    bannerContainer.style.display = 'block';
                }
            })
            .catch(() => {
                // No emergency message or error loading - hide banner
                bannerContainer.style.display = 'none';
            });
    }

    /**
     * Highlight current page in navigation
     */
    function highlightCurrentPage() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-menu a');

        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            if (linkPath === currentPath) {
                link.classList.add('current-page');
                link.style.backgroundColor = 'var(--primary-blue)';
                link.style.color = 'var(--accent-gold)';
            }
        });
    }

    /**
     * Initialize everything when DOM is ready
     */
    function init() {
        generateNavigation();
        initMobileMenu();
        loadEmergencyBanner();
        highlightCurrentPage();
    }

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
