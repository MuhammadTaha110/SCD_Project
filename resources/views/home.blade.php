@extends('layout')

@section('title', 'Home Page')

@section('content')
<main class="container">
    <section >
        <div class="col-12  mb-4">
                <div class="service-card manage text-center">
                    <i class="fa-solid fa-window-restore fa-3x mb-3"></i>
                    <h4>Manage Your Tasks!</h4>
                    <p>Designed to streamline productivity by helping users organize, prioritize, and track tasks all in one place.</p>
                </div>
            </div>
        
    </section>

    <section class="services my-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="container">
        <div class="row">
            <!-- Create Task -->
            <div class="col-12 col-md-6 mb-4">
                <div class="service-card create text-center">
                <a href="{{ route('tasks.create') }}" class="links">
                    <i class="fas fa-plus-circle fa-3x mb-3"></i>
                    <h4>Create Task</h4>
                    <p>Quickly add new tasks and set details like priority and deadlines to organize your work effortlessly.</p>
                    </a>
                </div>
            </div>

            <!-- View Task -->
            <div class="col-12 col-md-6 mb-4">
                <div class="service-card view text-center">
                <a href="{{ route('tasks.index') }}" class="links">
                    <i class="fas fa-eye fa-3x mb-3"></i>
                    <h4>View Task</h4>
                    <p>Get a clear overview of all your tasks in one place and stay on top of your work.</p>
                    </a>
                </div>
            </div>

            <!-- Update Task -->
            <div class="col-12 col-md-6 mb-4">
                <div class="service-card update text-center">
                <a href="{{ route('tasks.index') }}" class="links">
                    <i class="fas fa-edit fa-3x mb-3"></i>
                    <h4>Update Task</h4>
                    <p>Easily make adjustments to your tasks as requirements change and stay adaptable.</p>
                    </a>
                </div>
            </div>

            <!-- Delete Task -->
            <div class="col-12 col-md-6 mb-4">
                <div class="service-card delete text-center">
                <a href="{{ route('tasks.index') }}" class="links">
                    <i class="fas fa-trash-alt fa-3x mb-3"></i>
                    <h4>Delete Task</h4>
                    <p>Remove completed or obsolete tasks to keep your workspace clean and organized.</p>
                    </a>

                </div>
            </div>

            <!-- Assign Task -->
            <div class="col-12 col-md-6 mb-4">
                <div class="service-card assign-task text-center">
                <a href="{{ route('tasks.myTasks') }}" class="links">
                    <i class="fas fa-user-check fa-3x mb-3"></i>
                    <h4> View Assigned Task</h4>
                    <p>Delegate tasks to team members, ensuring everyone knows their responsibilities.</p>
                    </a>
                </div>
            </div>

            <!-- Track Task -->
            <div class="col-12 col-md-6 mb-4">
                <div class="service-card track-task text-center">
                <a href="{{ route('tasks.assigned') }}" class="links">
                    <i class="fas fa-tasks fa-3x mb-3"></i>
                    <h4>Track Task</h4>
                    <p>Monitor the progress of assigned tasks and keep projects on track efficiently.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


 


    <!-- Contact Section -->
    <section class="contact row my-5">
        <div class="col text-center">
            <h2>Contact Us</h2>
            <p>If you have any questions or feedback, feel free to reach out to us!</p>
            <form action="" method="POST" class="contact-form">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Carousel -->
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="container rounded">
                <h2 class="text-center">TRUSTED BY</h2>
                <div class="slider">
                    <div class="logos">
                        <img src="https://brainblitzbymtahatalib.netlify.app/imgs/logo.png" width='100px' alt="">
                        <img src="https://eboxelectric.com/media/logo/stores/6/EBOX_logo_NEW.png" width='120px' alt="">
                        <img src="https://jdjustdesigner.com/wp-content/uploads/2023/08/cropped-Untitled-design-59-155x74.png" width='120px' alt="">
                        <img src="https://aimastores.com/wp-content/uploads/2024/03/cropped-Final-file-02-01-scaled-1-2048x1472.jpg" width='100px' alt="">
                        <img src="https://wicjewellers.com/wp-content/uploads/2024/09/cropped-IMG-20240908-WA0086-removebg-1.png" width='140px' style='margin-top: 20px' alt="">
                        <img src="https://kolonimpression.com/wp-content/uploads/2024/10/kolon-logo-png-65x82.png" width='50px' alt="">
                        <img src="https://morkscents.com/wp-content/uploads/2024/10/logo.png" width='100px' alt="">
                    </div>
                    <div class="logos">
                        <img src="https://brainblitzbymtahatalib.netlify.app/imgs/logo.png" width='100px' alt="">
                        <img src="https://eboxelectric.com/media/logo/stores/6/EBOX_logo_NEW.png" width='120px' alt="">
                        <img src="https://jdjustdesigner.com/wp-content/uploads/2023/08/cropped-Untitled-design-59-155x74.png" width='120px' alt="">
                        <img src="https://aimastores.com/wp-content/uploads/2024/03/cropped-Final-file-02-01-scaled-1-2048x1472.jpg" width='100px' alt="">
                        <img src="https://wicjewellers.com/wp-content/uploads/2024/09/cropped-IMG-20240908-WA0086-removebg-1.png" width='140px' style='margin-top: 20px' alt="">
                        <img src="https://kolonimpression.com/wp-content/uploads/2024/10/kolon-logo-png-65x82.png" width='50px' alt="">
                        <img src="https://morkscents.com/wp-content/uploads/2024/10/logo.png" width='100px' alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
