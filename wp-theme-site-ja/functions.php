<?php
/**
 * Funções e definições do tema Site Já
 */

function site_ja_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'site_ja_setup');

function site_ja_scripts() {
    // Tailwind CSS via CDN (Para fins de prototipagem rápida e cópia)
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null);
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', array(), null);
    
    // Estilo principal
    wp_enqueue_style('site-ja-style', get_stylesheet_uri());
    
    // Framer Motion e Lucide Icons seriam via scripts externos se necessário, 
    // mas aqui usaremos SVGs para os ícones para garantir que funcione ao copiar.
}
add_action('wp_enqueue_scripts', 'site_ja_scripts');

// Configuração customizada do Tailwind para o tema
function site_ja_tailwind_config() {
    ?>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#39FF14',
              background: '#000000',
              secondary: '#111111',
            }
          }
        }
      }
    </script>
    <?php
}
add_action('wp_head', 'site_ja_tailwind_config');
