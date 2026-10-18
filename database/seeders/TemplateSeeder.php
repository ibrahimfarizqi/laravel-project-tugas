<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    public function run(): void
    {
        // 1. React Developer Portfolio
        Template::create([
            'judul' => 'React Developer Portfolio',
            'kategori' => 'Portfolio',
            'tech_stack' => 'React, CSS, JavaScript, HTML',
            'thumbnail' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=600&q=80',
            'link_preview' => 'https://react-portfolio-v1.netlify.app/',
            'link_github' => 'https://github.com/pavanmg007/react-developer-portfolio-template',
            'deskripsi' => 'A minimal portfolio template for Developers built with React.js and modern styling.',
            'likes' => 124,
            'views' => 1580,
        ]);

        // 2. Flowbite Portfolio Template
        Template::create([
            'judul' => 'Flowbite Portfolio Template',
            'kategori' => 'Portfolio',
            'tech_stack' => 'HTML5, Tailwind CSS, Flowbite',
            'thumbnail' => 'https://raw.githubusercontent.com/iamelse/portofolio-template-flowbite/main/public/img/screenshot1.png',
            'link_preview' => 'https://iamelse.github.io/portofolio-template-flowbite/',
            'link_github' => 'https://github.com/iamelse/portofolio-template-flowbite',
            'deskripsi' => 'Simple and clean portfolio template built with HTML5 and Flowbite Tailwind UI components.',
            'likes' => 88,
            'views' => 920,
        ]);

        // 3. JembutFolio Portfolio
        Template::create([
            'judul' => 'DevFolio Portfolio',
            'kategori' => 'Portfolio',
            'tech_stack' => 'HTML, CSS, JavaScript, Tailwind',
            'thumbnail' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80',
            'link_preview' => 'https://ifulxploit.github.io/jembutfolio/',
            'link_github' => 'https://github.com/ifulxploit/jembutfolio',
            'deskripsi' => 'Sleek design portfolio utilizing Tailwind CSS for displaying professional portfolios with style.',
            'likes' => 156,
            'views' => 2100,
        ]);

        // 4. Finance SaaS Landing Page
        Template::create([
            'judul' => 'Finance SaaS Landing Page',
            'kategori' => 'Landing Page',
            'tech_stack' => 'HTML, CSS, Tailwind CSS',
            'thumbnail' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80',
            'link_preview' => 'https://finance-saas-template.netlify.app/',
            'link_github' => 'https://github.com/PaulleDemon/awesome-landing-pages',
            'deskripsi' => 'Free landing page template for SaaS founders, freelancers, agencies, and financial products.',
            'likes' => 210,
            'views' => 3400,
        ]);
    }
}