<footer>
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php echo get_theme_mod('site_title', 'Stack Eaters'); ?>. <?php echo get_theme_mod('footer_text', 'Alla rättigheter förbehållna.'); ?></p>
        <?php if (get_theme_mod('show_footer_menu', true)): ?>
            <div class="footer-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer-nav',
                    'container' => false,
                    'fallback_cb' => false
                ));
                ?>
            </div>
        <?php endif; ?>
    </div>
</footer>

<script>
// Demo contact form: never send entered personal data through an unconfigured GET request.
document.addEventListener('DOMContentLoaded', function() {
    const demoForm = document.getElementById('contactForm');
    if (demoForm) {
        demoForm.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Detta är ett demonstrationsformulär. Inget meddelande har skickats.');
        });
    }
});

// Modal functionality
function openModal(service) {
    const modal = document.getElementById(service + 'Modal');
    if (!modal) return;
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModal(service) {
    const modal = document.getElementById(service + 'Modal');
    if (!modal) return;
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modals = document.getElementsByClassName('modal');
    for (let i = 0; i < modals.length; i++) {
        if (event.target == modals[i]) {
            modals[i].style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const modals = document.getElementsByClassName('modal');
        for (let i = 0; i < modals.length; i++) {
            if (modals[i].style.display === 'block') {
                modals[i].style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    }
});

// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('nav a[href^="#"]');
    
    for (const link of links) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>