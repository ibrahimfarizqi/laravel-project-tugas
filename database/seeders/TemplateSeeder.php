<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Template::create([
            'judul' => 'Shop Homepage Store',
            'deskripsi' => 'A clean and responsive Bootstrap 5 e-commerce template for online shops.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/shop-homepage',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-shop-homepage',
            'views' => 450,
            'likes' => 128,
        ]);

        Template::create([
            'judul' => 'Start Landing Page',
            'deskripsi' => 'An elegant responsive landing page template for feature showcases and SaaS products.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, Bootstrap 5, CSS3',
            'thumbnail' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/landing-page',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-landing-page',
            'views' => 380,
            'likes' => 95,
        ]);

        Template::create([
            'judul' => 'Agency Studio One Page',
            'deskripsi' => 'Stylish one-page template for digital agencies and creative studios.',
            'kategori' => 'Portfolio',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/agency',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-agency',
            'views' => 520,
            'likes' => 164,
        ]);

        Template::create([
            'judul' => 'Freelancer Personal Portfolio',
            'deskripsi' => 'Flat design, one-page portfolio template for freelancers and developers.',
            'kategori' => 'Portfolio',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/freelancer',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-freelancer',
            'views' => 610,
            'likes' => 210,
        ]);

        Template::create([
            'judul' => 'Creative Business Theme',
            'deskripsi' => 'One-page Bootstrap theme ideal for creative agencies and modern small businesses.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, Bootstrap 5, FontAwesome',
            'thumbnail' => 'https://images.unsplash.com/photo-1522542550221-31fd19575a2d?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/creative',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-creative',
            'views' => 290,
            'likes' => 84,
        ]);

        Template::create([
            'judul' => 'Stylish Off-Canvas Portfolio',
            'deskripsi' => 'Off-canvas navigation layout template built for smooth scrolling portfolios.',
            'kategori' => 'Portfolio',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/stylish-portfolio',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-stylish-portfolio',
            'views' => 315,
            'likes' => 76,
        ]);

        Template::create([
            'judul' => 'Coming Soon Countdown',
            'deskripsi' => 'Modern coming soon page template featuring a video background and subscription form.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, Bootstrap 5, CSS Video',
            'thumbnail' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/coming-soon',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-coming-soon',
            'views' => 230,
            'likes' => 54,
        ]);

        Template::create([
            'judul' => 'Simple Sidebar Layout',
            'deskripsi' => 'Minimalist sidebar layout template for web applications and dashboard navigation.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/simple-sidebar',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-simple-sidebar',
            'views' => 340,
            'likes' => 92,
        ]);

        Template::create([
            'judul' => 'SB Admin Classic',
            'deskripsi' => 'Classic open-source admin dashboard template with essential UI components.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/sb-admin',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-sb-admin',
            'views' => 710,
            'likes' => 260,
        ]);

        Template::create([
            'judul' => 'SB Admin 2 Control Panel',
            'deskripsi' => 'A feature-rich admin dashboard layout with modern UI components and charts.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 4, Chart.js',
            'thumbnail' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80',
            'link_preview' => 'https://startbootstrap.com/previews/sb-admin-2',
            'link_github' => 'https://github.com/StartBootstrap/startbootstrap-sb-admin-2',
            'views' => 840,
            'likes' => 310,
        ]);

        Template::create([
            'judul' => 'Awesome Bootstrap Showcase',
            'deskripsi' => 'Curated collection of high quality free Bootstrap themes and templates.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, Bootstrap, CSS3',
            'thumbnail' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=800&q=80',
            'link_preview' => 'https://github.com/TheCompleteCode/awesome-bootstrap',
            'link_github' => 'https://github.com/TheCompleteCode/awesome-bootstrap',
            'views' => 480,
            'likes' => 150,
        ]);

        Template::create([
            'judul' => 'Themes For App Startup',
            'deskripsi' => 'Clean landing pages built specifically for startups, side projects, and SaaS apps.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, CSS3, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1542744094-3a31b272c490?w=800&q=80',
            'link_preview' => 'https://github.com/kantbtrue/themesforapp',
            'link_github' => 'https://github.com/kantbtrue/themesforapp',
            'views' => 390,
            'likes' => 112,
        ]);

        Template::create([
            'judul' => 'Responsive Admin Dashboard',
            'deskripsi' => 'Lightweight and responsive dashboard UI design template for web managers.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, CSS3, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1531538606174-0f923f487638?w=800&q=80',
            'link_preview' => 'https://github.com/Ehesp/Responsive-Dashboard',
            'link_github' => 'https://github.com/Ehesp/Responsive-Dashboard',
            'views' => 430,
            'likes' => 125,
        ]);

        Template::create([
            'judul' => 'Argon Premium Dashboard',
            'deskripsi' => 'Beautiful open-source Bootstrap 4 admin dashboard template by Creative Tim.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 4, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&q=80',
            'link_preview' => 'https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html',
            'link_github' => 'https://github.com/creativetimofficial/argon-dashboard',
            'views' => 730,
            'likes' => 245,
        ]);

        Template::create([
            'judul' => 'Material Design Admin',
            'deskripsi' => 'Fresh material design inspired admin dashboard template for web apps.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Material UI, Bootstrap 4',
            'thumbnail' => 'https://images.unsplash.com/photo-1523961131990-5ea7c61b2107?w=800&q=80',
            'link_preview' => 'https://demos.creative-tim.com/material-dashboard/pages/dashboard.html',
            'link_github' => 'https://github.com/creativetimofficial/material-dashboard',
            'views' => 620,
            'likes' => 188,
        ]);

        Template::create([
            'judul' => 'Flowbite Tailwind Component Kit',
            'deskripsi' => 'Open-source UI component library and templates built with Tailwind CSS.',
            'kategori' => 'Portfolio',
            'tech_stack' => 'HTML5, Tailwind CSS, Flowbite',
            'thumbnail' => 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?w=800&q=80',
            'link_preview' => 'https://flowbite.com/',
            'link_github' => 'https://github.com/themesberg/flowbite',
            'views' => 950,
            'likes' => 420,
        ]);

        Template::create([
            'judul' => 'Minimal Mistakes Jekyll Theme',
            'deskripsi' => 'Flexible two-column Jekyll theme for building personal sites, blogs, and portfolios.',
            'kategori' => 'Blog',
            'tech_stack' => 'Jekyll, HTML5, SCSS',
            'thumbnail' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800&q=80',
            'link_preview' => 'https://mmistakes.github.io/minimal-mistakes/',
            'link_github' => 'https://github.com/mmistakes/minimal-mistakes',
            'views' => 560,
            'likes' => 175,
        ]);

        Template::create([
            'judul' => 'Chirpy Minimal Blog',
            'deskripsi' => 'A responsive and feature-rich Jekyll theme designed for technical blogging.',
            'kategori' => 'Blog',
            'tech_stack' => 'Jekyll, HTML5, CSS3, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=800&q=80',
            'link_preview' => 'https://chirpy.cotes.page/',
            'link_github' => 'https://github.com/cotes2020/jekyll-theme-chirpy',
            'views' => 410,
            'likes' => 135,
        ]);

        Template::create([
            'judul' => 'Hyde Two-Column Jekyll Theme',
            'deskripsi' => 'A brazen two-column Jekyll theme derived from Poole layout framework.',
            'kategori' => 'Blog',
            'tech_stack' => 'Jekyll, HTML5, CSS3',
            'thumbnail' => 'https://images.unsplash.com/photo-1457369804613-52c61a468e7d?w=800&q=80',
            'link_preview' => 'https://hyde.poole.github.io/',
            'link_github' => 'https://github.com/poole/hyde',
            'views' => 290,
            'likes' => 88,
        ]);

        Template::create([
            'judul' => 'Minima Default Jekyll Theme',
            'deskripsi' => 'The clean and minimal default theme for Jekyll static site generator.',
            'kategori' => 'Blog',
            'tech_stack' => 'Jekyll, HTML5, CSS3',
            'thumbnail' => 'https://images.unsplash.com/photo-1507099985932-87a4520ed1d5?w=800&q=80',
            'link_preview' => 'https://github.com/jekyll/minima',
            'link_github' => 'https://github.com/jekyll/minima',
            'views' => 310,
            'likes' => 90,
        ]);

        Template::create([
            'judul' => 'al-folio Academic Portfolio',
            'deskripsi' => 'A clean, responsive, and elegant Jekyll theme for academics and researchers.',
            'kategori' => 'Portfolio',
            'tech_stack' => 'Jekyll, HTML5, Bootstrap 4',
            'thumbnail' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80',
            'link_preview' => 'https://alshedivat.github.io/al-folio/',
            'link_github' => 'https://github.com/alshedivat/al-folio',
            'views' => 680,
            'likes' => 230,
        ]);

        Template::create([
            'judul' => 'Sneat Free Bootstrap Admin',
            'deskripsi' => 'Modern and developer-friendly Bootstrap 5 HTML admin template for web applications.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&q=80',
            'link_preview' => 'https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/vertical-menu-template/',
            'link_github' => 'https://github.com/themeselection/sneat-html-admin-template-free',
            'views' => 780,
            'likes' => 320,
        ]);

        Template::create([
            'judul' => 'Volt Bootstrap 5 Dashboard',
            'deskripsi' => 'Open source Bootstrap 5 admin dashboard with 100+ components and custom pages.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 5, Vanilla JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&q=80',
            'link_preview' => 'https://demo.themesberg.com/volt-bootstrap-5-dashboard/',
            'link_github' => 'https://github.com/themesberg/volt-bootstrap-5-dashboard',
            'views' => 650,
            'likes' => 240,
        ]);

        Template::create([
            'judul' => 'TailAdmin Next.js Dashboard',
            'deskripsi' => 'Free and open-source Next.js admin dashboard template built with Tailwind CSS.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'Next.js, React, Tailwind CSS',
            'thumbnail' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=800&q=80',
            'link_preview' => 'https://tailadmin.com/',
            'link_github' => 'https://github.com/TailAdmin/free-nextjs-admin-template',
            'views' => 890,
            'likes' => 410,
        ]);

        Template::create([
            'judul' => 'AstroPaper Tech Blog',
            'deskripsi' => 'A minimal, responsive, accessible, and SEO-friendly Astro blog theme.',
            'kategori' => 'Blog',
            'tech_stack' => 'Astro, TypeScript, Tailwind CSS',
            'thumbnail' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&q=80',
            'link_preview' => 'https://astro-paper.pages.dev/',
            'link_github' => 'https://github.com/satnaing/astro-paper',
            'views' => 510,
            'likes' => 195,
        ]);

        Template::create([
            'judul' => 'Horizon UI React Admin',
            'deskripsi' => 'Trendiest open-source admin dashboard template for React and Chakra UI.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'React, Chakra UI, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1508739773434-c26b3d09e071?w=800&q=80',
            'link_preview' => 'https://horizon-ui.com/',
            'link_github' => 'https://github.com/horizon-ui/horizon-ui-chakra',
            'views' => 920,
            'likes' => 380,
        ]);

        Template::create([
            'judul' => 'Brittany Chiang V4 Portfolio',
            'deskripsi' => 'A clean and dark modern developer portfolio built with React and Gatsby.',
            'kategori' => 'Portfolio',
            'tech_stack' => 'React, Gatsby, Styled Components',
            'thumbnail' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&q=80',
            'link_preview' => 'https://brittanychiang.com/',
            'link_github' => 'https://github.com/bchiang7/v4',
            'views' => 1200,
            'likes' => 560,
        ]);

        Template::create([
            'judul' => 'AdminLTE 3 Control Panel',
            'deskripsi' => 'Best open source admin dashboard & control panel theme built on Bootstrap 4.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 4, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800&q=80',
            'link_preview' => 'https://adminlte.io/themes/v3/',
            'link_github' => 'https://github.com/ColorlibHQ/AdminLTE',
            'views' => 1400,
            'likes' => 610,
        ]);

        Template::create([
            'judul' => 'Tabler Dashboard UI Kit',
            'deskripsi' => 'Premium and open-source dashboard template with responsive and crisp UI components.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 5, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1559028012-481c04fa702d?w=800&q=80',
            'link_preview' => 'https://tabler.io/preview',
            'link_github' => 'https://github.com/tabler/tabler',
            'views' => 830,
            'likes' => 340,
        ]);

        Template::create([
            'judul' => 'Casper Ghost Official Theme',
            'deskripsi' => 'The default, beautifully minimal publication theme for Ghost blogging platform.',
            'kategori' => 'Blog',
            'tech_stack' => 'Handlebars, HTML5, CSS3, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=800&q=80',
            'link_preview' => 'https://demo.ghost.io/',
            'link_github' => 'https://github.com/TryGhost/Casper',
            'views' => 470,
            'likes' => 180,
        ]);

        Template::create([
            'judul' => 'Next.js Boilerplate Landing',
            'deskripsi' => 'Starter kit landing page template for SaaS product with Next.js, Tailwind, and TypeScript.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'Next.js, TypeScript, Tailwind CSS',
            'thumbnail' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80',
            'link_preview' => 'https://nextjs-boilerplate.com/',
            'link_github' => 'https://github.com/ixartz/Next-js-Boilerplate',
            'views' => 740,
            'likes' => 290,
        ]);

        Template::create([
            'judul' => 'Mantis React Free Admin',
            'deskripsi' => 'Mantis is a free React dashboard template built using MUI (Material UI) components.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'React, Material UI, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=800&q=80',
            'link_preview' => 'https://mantisdashboard.io/',
            'link_github' => 'https://github.com/codedthemes/mantis-free-react-admin-template',
            'views' => 610,
            'likes' => 220,
        ]);

        Template::create([
            'judul' => 'Focus Admin Template',
            'deskripsi' => 'Lightweight, clean, and responsive HTML5 admin dashboard template.',
            'kategori' => 'Dashboard',
            'tech_stack' => 'HTML5, Bootstrap 4, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=800&q=80',
            'link_preview' => 'https://quixlab.com/',
            'link_github' => 'https://github.com/Quixlab/focus-admin',
            'views' => 390,
            'likes' => 115,
        ]);

        Template::create([
            'judul' => 'Tailstack Landing Page',
            'deskripsi' => 'Clean landing page UI template for marketing software tools and web products.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, Tailwind CSS, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?w=800&q=80',
            'link_preview' => 'https://tailwindtoolbox.github.io/App-Landing-Page/',
            'link_github' => 'https://github.com/TailwindToolbox/App-Landing-Page',
            'views' => 530,
            'likes' => 170,
        ]);

        Template::create([
            'judul' => 'Astro Sphere Portfolio',
            'deskripsi' => 'Personal portfolio and blog template with dark mode powered by Astro.',
            'kategori' => 'Portfolio',
            'tech_stack' => 'Astro, Tailwind CSS, JS',
            'thumbnail' => 'https://images.unsplash.com/photo-1522071901873-411886a10004?w=800&q=80',
            'link_preview' => 'https://astro.build/',
            'link_github' => 'https://github.com/withastro/astro',
            'views' => 810,
            'likes' => 360,
        ]);

        Template::create([
            'judul' => 'Kreatif E-Commerce Card Grid',
            'deskripsi' => 'Modern product display grid template designed for digital products marketplace.',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML5, Tailwind CSS',
            'thumbnail' => 'https://images.unsplash.com/photo-1556742049-0a67dd38c105?w=800&q=80',
            'link_preview' => 'https://tailwindtoolbox.github.io/E-commerce-Card/',
            'link_github' => 'https://github.com/TailwindToolbox/E-commerce-Card',
            'views' => 420,
            'likes' => 145,
        ]);
    }
}