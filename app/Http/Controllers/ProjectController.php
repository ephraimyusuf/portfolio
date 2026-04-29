<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * SINGLE SOURCE OF PROJECT DATA
     */
    private function getProjects()
    {
        return [
            [
                'name' => 'School MIS System',
                'description' => 'School management system for students and staff.',
                'slug' => 'school-mis',
                'tech' => ['Laravel', 'MySQL', 'Tailwind'],
                'github' => 'https://github.com/ephraimyusuf/school-mis',
            ],
            [
                'name' => 'Web Scraper',
                'description' => 'Automated scraping tool.',
                'slug' => 'web-scraper',
                'tech' => ['Laravel', 'Python', 'API'],
                'github' => 'https://github.com/ephraimyusuf/zeescrapper',
            ],
            [
                'name' => 'School Hub',
                'description' => 'Modern school platform.',
                'slug' => 'school-hub',
                'tech' => ['Laravel', 'Blade', 'Tailwind'],
                'github' => 'https://github.com/ephraimyusuf/school-hub',
            ],
        ];
    }

    /**
     * HOME PAGE (3 PROJECTS)
     */
    public function index()
    {
        return view('portfolio.pages.home', [
            'projects' => array_slice($this->getProjects(), 0, 3)
        ]);
    }

    /**
     * ALL PROJECTS PAGE
     */
    public function projects()
    {
        return view('portfolio.pages.projects', [
            'projects' => $this->getProjects()
        ]);
    }

    /**
     * SINGLE PROJECT PAGE
     */
    public function show($slug)
    {
        $project = collect($this->getProjects())
            ->firstWhere('slug', $slug);

        if (!$project) {
            abort(404);
        }

        return view('portfolio.pages.project-show', compact('project'));
    }
}