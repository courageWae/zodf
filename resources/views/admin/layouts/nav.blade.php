<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  
  @php
  use \App\Model\User\Contact;
      $newmessages = Contact::where('read','new')->get();
      $countmessages = count($newmessages);
      
  @endphp
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#"> 
        <i class="far fa-comments"></i>
      <span class="badge badge-danger navbar-badge">{{ $countmessages }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
        @foreach ($newmessages as $newmessage)
        @php
            $messagelimit = $newmessage->message
        @endphp
        <a href="" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                {{ $newmessage->name }}
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm"><strong>{{ $newmessage->subject }}</strong></p>
              <p class="text-sm">{{ $messagelimit }}</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ $newmessage->created_at->diffForHumans() }}</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        @endforeach
        <a href="{{ route('viewcontact') }}" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    
    {{-- <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li> --}}
  </ul>
</nav>