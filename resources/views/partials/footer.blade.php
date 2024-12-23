<footer class="bg-dark text-white py-3 mt-auto">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-2 mb-2">
        <a href="{{ route('home') }}" class="text-white text-decoration-none">Home Page</a>
      </div>
      <div class="col-md-2 mb-2">
        <a href="{{ route('tasks.create') }}" class="text-white text-decoration-none">Create Task</a>
      </div>
      <div class="col-md-2 mb-2">
        <a href="{{ route('tasks.index') }}" class="text-white text-decoration-none">View Task</a>
      </div>
      <div class="col-md-2 mb-2">
        <a href="{{ route('tasks.assigned') }}" class="text-white text-decoration-none">My Task</a>
      </div>
      <div class="col-md-2 mb-2">
        <a href="{{ route('tasks.myTasks') }}" class="text-white text-decoration-none">Track Task</a>
      </div>
    </div>
    <hr class="border-light">
    <p class="mb-0 text-center w-100">Copyrights © 2024 | Muhamad Taha Talib | All rights reserved.</p>
  </div>
</footer>
