<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $services = [
            ['icon' => 'code', 'title' => 'Software Development', 'description' => 'Custom web applications, corporate websites, internal systems and digital solutions tailored to business requirements.'],
            ['icon' => 'network', 'title' => 'Network Solutions', 'description' => 'Network planning, implementation, configuration and troubleshooting for stable and secure connectivity.'],
            ['icon' => 'server', 'title' => 'IT Infrastructure', 'description' => 'Server, workstation and infrastructure solutions designed to support reliable business operations.'],
            ['icon' => 'support', 'title' => 'IT Support & Maintenance', 'description' => 'Professional troubleshooting, maintenance and operational IT assistance for your organization.'],
            ['icon' => 'shield', 'title' => 'IT Security', 'description' => 'Security-focused recommendations and implementation to protect devices, networks and business systems.'],
            ['icon' => 'laptop', 'title' => 'IT Procurement', 'description' => 'Technology procurement assistance aligned with technical needs, operations and budget.'],
        ];

        $testimonials = [
            [
                'company' => 'Corporate Client',
                'type' => 'Procurement',
                'initial' => 'MR',
                'quote' => 'B-COMP has been a reliable technology partner in supporting our operational requirements. Their team is responsive, easy to coordinate with, and able to provide practical solutions based on our needs.',
                'person' => 'M. Rusdiyana',
                'role' => 'Procurement — Corporate Client',
            ],
            [
                'company' => 'Corporate Client',
                'type' => 'Procurement',
                'initial' => 'DT',
                'quote' => 'Working with B-COMP gives us confidence when handling technology and IT procurement requirements. They communicate clearly, respond quickly, and provide recommendations that consider technical requirements and budget efficiency.',
                'person' => 'Dedi Tri Kusuma',
                'role' => 'Procurement — Corporate Client',
            ],
            [
                'company' => 'Corporate Client',
                'type' => 'Project Management',
                'initial' => 'IK',
                'quote' => 'B-COMP demonstrates strong commitment throughout every stage of the project. Their team understands project requirements well, provides practical technical recommendations, and maintains good coordination during implementation.',
                'person' => 'Iwan Kint Gemasi',
                'role' => 'Project Manager — Corporate Client',
            ],
        ];

        $projects = [
            [
                'category' => 'Software',
                'title' => 'Business Management System',
                'description' => 'Custom digital platform designed to centralize business operations and improve workflow efficiency.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=85&w=1200&auto=format&fit=crop',
                'tags' => ['Web App', 'Database', 'Dashboard'],
            ],
            [
                'category' => 'Infrastructure',
                'title' => 'Office Network Implementation',
                'description' => 'Network planning and implementation designed to provide stable, secure and reliable connectivity.',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=85&w=1200&auto=format&fit=crop',
                'tags' => ['LAN', 'Wi-Fi', 'Security'],
            ],
            [
                'category' => 'Managed IT',
                'title' => 'Corporate IT Support',
                'description' => 'Technical support and maintenance services to help maintain reliable day-to-day IT operations.',
                'image' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=85&w=1200&auto=format&fit=crop',
                'tags' => ['Support', 'Maintenance', 'Monitoring'],
            ],
        ];

        $technologies = [
            'HTML5', 'CSS3', 'JavaScript', 'React', 'Node.js', 'PHP',
            'Laravel', 'Python', 'MySQL', 'Linux', 'Microsoft', 'GitHub'
        ];

        return view('pages.home', compact('services', 'testimonials', 'projects', 'technologies'));
    }
}
