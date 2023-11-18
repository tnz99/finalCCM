@extends('components.layout')
@section('body_class', 'the-kingdom')
@section('header')
    <x-header :dark=true />
@endsection

@section('content')
<section class="d-flex text-white">
    <div class="d-flex flex-column">
        <div class="text-white ml-139 mt-148 " style="width: 35vw; padding-right: 12%;">
            <h1 class="fs-96 fw-700 lh-normal font-normal">About</h1>
            <p class="fw-400 fs-24 lh-normal font-normal">In the serene Kingdom of Bhutan, nestled in the Eastern Himalayas, the profound philosophy of Gross National Happiness (GNH) not only shapes the nation's approach to well-being but also guides its stance on environmental conservation and climate change. Bhutan, a carbon-negative country, has set a remarkable example for the world by prioritizing sustainability over economic growth.</p>
        </div>
    </div>

    <div class="" style="width: 65vw; margin-top: 4%; padding-right: 10%;">
        <div>
            <h2 class="fw-700">Mission</h2>
            <p class="font-normal lh-normal fs-24">At Climate Change Museum, our mission is to raise awareness about climate change and promote sustainable practices. We provide a comprehensive online platform showcasing Bhutan's environmental heritage, climate change initiatives, and innovative solutions.</p>
        </div>

        <div>
            <h2 class="fw-700">Vision</h2>
            <p class="font-normal lh-normal fs-24"> Our vision is to foster an informed and engaged global community in the fight against climate change. We aim to bridge the gap between Bhutan's commitment to environmental conservation and global access to essential knowledge.</p>
        </div>

        <div>
            <h2 class="fw-700">Features</h2>
            <ol class="list-decimal font-normal lh-normal fs-24">
                <li>Comprehensive Exhibits: Explore the impact of climate change on flora, fauna, and Bhutan's sustainable practices.</li>
                <li>Educational Resources: Access accurate and easy-to-understand information through articles, videos, and interactive content.</li>
                <li>Engaging User Experience: Enjoy a seamless and user-friendly interface for immersive learning. </li>
            </ol>
        </div>

        <div>
            <p class="font-normal lh-normal fs-24">Join us on this journey to create a sustainable future where nature and mankind coexist harmoniously.</p>
        </div>
    </div>
</section>
<x-story-nav :dark=true />
@endsection