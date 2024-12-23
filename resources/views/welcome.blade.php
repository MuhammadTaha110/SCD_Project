@extends('layout')

@section('title', 'Welcome to Task Manager')

@section('content')
<main class="container">
    <section class="hero text-center my-5 title">
        <h1>Welcome to Your Task Manager!</h1>
        <p>Streamline your tasks and boost your productivity with our powerful task management app.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Get Started</a>
    </section>

    <section class="key-features my-5">
        <h2 class="text-center">Key Features</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center create">
                    <i class="fas fa-plus-circle fa-3x mb-3"></i>
                    <h4>Create Tasks</h4>
                    <p>Easily create new tasks with deadlines & priorities.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center low view">
                    <i class="fas fa-tasks fa-3x mb-3"></i>
                    <h4>View Tasks</h4>
                    <p>Get a clear overview of all your tasks in one place.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center high assign-task">
                    <i class="fas fa-user-check fa-3x mb-3"></i>
                    <h4>Assign Tasks</h4>
                    <p>Delegate tasks to team members effortlessly.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center btn-warning track-task">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h4>Track Task</h4>
                    <p>Monitor the progress of tasks and stay updated.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials my-5">
        <h2 class="text-center">What Our Users Say</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">"This task manager has changed the way I work!"</p>
                    <footer class="blockquote-footer">John Doe</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">"I love the simple interface and powerful features!"</p>
                    <footer class="blockquote-footer">Jane Smith</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">"A must-have tool for anyone looking to stay organized."</p>
                    <footer class="blockquote-footer">Mark Wilson</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- About Section -->

 <h2 class="text-center mb-4 reasons">REASONS TO CHOOSE US!</h2>


<section class="about row my-5">

    <div class="col-12 col-md-8 offset-md-2"> <!-- Centering on larger screens -->
        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <i class="fas fa-check-circle fa-3x text-green"></i> <!-- Large Icon -->
            </div>
            <div class="col">
                <h5 class='about-heading'>Intuitive Task Creation</h5>
                <p>Easily create and customize your tasks to fit your workflow.</p>
            </div>
        </div>
        <hr> <!-- Separator Line -->

        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <i class="fas fa-bell fa-3x text-warning"></i> <!-- Large Icon -->
            </div>
            <div class="col">
                <h5 class='about-heading'>Deadline Reminders</h5>
                <p>Stay on top of your deadlines with timely reminders.</p>
            </div>
        </div>
        <hr> <!-- Separator Line -->

        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <i class="fas fa-star fa-3x text-info"></i> <!-- Large Icon -->
            </div>
            <div class="col">
                <h5 class='about-heading'>Priority Tagging</h5>
                <p>Organize your tasks by priority to focus on what matters most.</p>
            </div>
        </div>
    </div>

</section>

<!-- Features Section -->
<section class="features my-5">
    <h2 class="text-center mb-4">Our Features</h2>
    <div class="container">
        <div class="row desc">
            <!-- Create Task Feature -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-plus-circle fa-3x text-blue mb-2"></i>
                    <h5>Create Task</h5>
                    <p>Easily create and customize tasks to suit your workflow.</p>
                </div>
            </div>
            
            <!-- View Task Feature -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-eye fa-3x mb-2 text-green"></i>
                    <h5>View Task</h5>
                    <p>Effortlessly view all your tasks at a glance and stay organized.</p>
                </div>
            </div>
            
            <!-- Assign Task Feature -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-user-check fa-3x text-warning mb-2"></i>
                    <h5>Assign Task</h5>
                    <p>Delegate tasks easily to team members.</p>
                </div>
            </div>
            
            <!-- Track Assigned Task Feature -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-tasks fa-3x text-info mb-2"></i>
                    <h5>Track Assigned Task</h5>
                    <p>Monitor progress on assigned tasks of team members.</p>
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
