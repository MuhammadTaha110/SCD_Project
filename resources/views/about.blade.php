@extends('layout')

@section('content')
<section class="about-us my-5 ">
    <div class="container">
        <h2 class="text-center mb-5 text-black">About Us</h2>

        <!-- Our Mission Section -->
        <div class="mission-section p-5 mb-4 text-center">
            <i class="fas fa-bullseye fa-3x mb-3"></i>
            <h3 class="mt-3">Our Mission</h3>
            <p class="mt-3">We are dedicated to providing exceptional task management solutions to help you stay organized, efficient, and on top of your goals. Our tools are designed with productivity in mind, making it easier for teams and individuals to manage tasks effectively.</p>
        </div>

        <!-- Our Vision Section -->
        <div class="vision-section p-5 mb-4 text-center">
            <i class="fas fa-lightbulb fa-3x mb-3"></i>
            <h3 class="mt-3">Our Vision</h3>
            <p class="mt-3">Our vision is to create a seamless task management experience, where technology empowers people to work smarter, not harder. By simplifying complex workflows and promoting collaboration, we aim to make work life more enjoyable.</p>
        </div>

        <!-- Our Values Section -->
        <div class="values-section p-5 mb-4 text-center" style="background: linear-gradient(135deg, #ff7e5f, #feb47b);">
            <i class="fas fa-heart fa-3x mb-3"></i>
            <h3 class="mt-3">Our Values</h3>
            <ul class="list-unstyled mt-4">
                <li class='text-black'><i class="text-black fas fa-check-circle"></i> <strong class='text-black'>Innovation:</strong> Continuously improving to meet the needs of modern teams.</li>
                <li class='text-black'><i class="text-black fas fa-check-circle"></i> <strong class='text-black'>Quality:</strong> Delivering a reliable and high-performance application.</li>
                <li class='text-black'><i class="text-black fas fa-check-circle"></i> <strong class='text-black'>Customer Satisfaction:</strong> Placing our users at the heart of everything we do.</li>
            </ul>
        </div>
    </div>
</section>
@endsection
