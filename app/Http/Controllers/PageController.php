<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSection;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\About;
use App\Models\Project;
use App\Models\ContactInfo;
use App\Models\Contact;

class PageController extends Controller
{
    public function home()
    {
        $hero = HeroSection::where('is_active', true)->first();
        $skills = Skill::where('is_featured', true)
                      ->orderBy('sort_order')
                      ->get()
                      ->groupBy('category');
        $testimonials = Testimonial::where('is_active', true)
                                  ->orderBy('sort_order')
                                  ->get();

        return view('pages.home', compact('hero', 'skills', 'testimonials'));
    }

    public function about()
    {
        $about = About::where('is_active', true)->first();
        return view('pages.about', compact('about'));
    }

    public function portfolio()
    {
        $projects = Project::where('is_active', true)
                       ->orderBy('sort_order')
                       ->get()
                       ->groupBy('category');

        $featuredProjects = Project::where('is_featured', true)
                              ->where('is_active', true)
                              ->orderBy('sort_order')
                              ->get();

        return view('pages.portfolio', compact('projects', 'featuredProjects'));
    }

    public function projectShow($slug)
    {
        $project = Project::where('slug', $slug)
                         ->where('is_active', true)
                         ->firstOrFail();

        $relatedProjects = Project::where('id', '!=', $project->id)
                                 ->where('is_active', true)
                                 ->where('category', $project->category)
                                 ->limit(3)
                                 ->get();

        return view('pages.project-show', compact('project', 'relatedProjects'));
    }

    public function contact()
    {
        $contactInfo = ContactInfo::where('is_active', true)->first();
        return view('pages.contact', compact('contactInfo'));
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10'
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully! I will get back to you soon.');
    }

    // Admin panel ke liye additional methods (optional)
    public function adminMessages()
    {
        $messages = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.messages', compact('messages'));
    }

    public function markAsRead($id)
    {
        $message = Contact::findOrFail($id);
        $message->update(['is_read' => true]);

        return redirect()->back()->with('success', 'Message marked as read.');
    }

    public function deleteMessage($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
