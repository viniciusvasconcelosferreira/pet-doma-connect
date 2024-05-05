@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header.header')
    @foreach($active_sessions as $section)
        @if($section->section_name == 'hero')
            @include('frontend.home.sections.hero')
        @endif
        @if($section->section_name == 'about-us')
            @include('frontend.home.sections.about-us')
        @endif
        @if($section->section_name == 'services')
            @include('frontend.home.sections.services')
        @endif
        @if($section->section_name == 'features')
            @include('frontend.home.sections.features')
        @endif
        @if($section->section_name == 'happy-customer')
            @include('frontend.home.sections.happy-customer')
        @endif
        @if($section->section_name == 'team')
            @include('frontend.home.sections.team')
        @endif
        @if($section->section_name == 'testimonial')
            @include('frontend.home.sections.testimonial')
        @endif
        @if($section->section_name == 'home-contact')
            @include('frontend.home.sections.home-contact')
        @endif
        @if($section->section_name == 'home-blog')
            @include('frontend.home.sections.home-blog')
        @endif
        @if($section->section_name == 'subscribe')
            @include('frontend.home.sections.subscribe')
        @endif
    @endforeach
    @include('frontend.layouts.partials.footer.footer')
@endsection
