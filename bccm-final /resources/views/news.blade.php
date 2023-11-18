@extends('components.layout')

@section('body_class', 'the-kingdom')

@section('header')
    <x-header :dark=true />
@endsection

@section('content')
<section class="d-flex text-white">
    <div class="d-flex flex-column ">
        <div class="text-white ml-139 mt-148" style="width: 35vw; padding-right: 12%;">
            <h1 class="fs-96 fw-700 lh-normal font-normal">News &</h1>
            <h1 class="fs-96 fw-700 lh-normal font-normal">Events</h1>
            <p class="fw-400 fs-24 lh-normal font-normal">In the serene Kingdom of Bhutan, nestled in the Eastern Himalayas, the profound philosophy of Gross National Happiness (GNH) not only shapes the nation's approach to well-being but also guides its stance on environmental conservation and climate change. Bhutan, a carbon-negative country, has set a remarkable example for the world by prioritizing sustainability over economic growth.</p>
        </div>
    </div>

    <div class="" style="width: 65vw; margin-top: 8%; padding-right: 10%;">
        <div class="" style="border-radius: 36px;
        background: rgba(217, 217, 217, 0.23); padding: 20px;">
            <h2 class="fw-500">Bhutan Takes Strides Towards Carbon Neutrality</h2>
            <p class="font-normal lh-normal fs-20">At Climate Change Museum, our mission is to raise awareness about climate change and promote sustainable practices. We provide a comprehensive online platform showcasing Bhutan's environmental heritage, climate change initiatives, and innovative solutions.</p>
        </div>

        <div class="" style="border-radius: 36px;
        background: rgba(217, 217, 217, 0.23); padding: 20px; margin-top: 10%;">
            <h2 class="fw-500">Event Announcment</h2>
            <p class="font-normal lh-normal fs-20"> Our vision is to foster an informed and engaged global community in the fight against climate change. We aim to bridge the gap between Bhutan's commitment to environmental conservation and global access to essential knowledge.</p>
        </div>
    </div>
</section>
@endsection
