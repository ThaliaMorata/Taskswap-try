<div class="col-md-3 " >

<!-- Profile Image -->
<div class="card secret" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style=" background:#F2F2F2; border-radius:10px">
  

<div style="display: flex; align-items: center; margin-left:40%;">
    <img src="{{ asset('assets/images/avatar4.png') }}" style="border-radius: 10%;" alt="TaskSwap" height="80">
    </div>

  <div class="info" style="color: white;margin-bottom:2%">
    <a href="#" class="d-block">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
    <div class="stars">
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="empty-stars">&#9733;</span>
    </div>
  </div>

<div class="form">
  <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: #f0f0f0; color: #333;">
      <div class="input-group-append">
          <button class="btn btn-sidebar" style="background-color:teal; color: #fff;">
              <i class="fas fa-search fa-fw"></i>
          </button> 
      </div>
  </div>
  <div class="sidebar-search-results">
      <div class="list-group">
          <a href="#" class="list-group-item">
              <div class="search-title">
                  <strong class="text-light"></strong>No<strong class="text-light"></strong> <strong class="text-light"></strong>el<strong class="text-light"></strong>em<strong class="text-light"></strong>en<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong>
              </div>
              <div class="search-path"></div>
          </a>
      </div>
  </div>
</div>
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-divide"></i>
        <p>
          Mathematics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-square-root-alt"></i>
            <p>Algebra</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-calculator"></i>
            <p>Calculus</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-ruler"></i>
            <p>Geometry</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-bar"></i>
            <p>Statistics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-superscript"></i>
            <p>Number Theory</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-flask"></i>
        <p>
          Natural Science
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
          <i class="fas fa-microscope"></i>
            <p>Biology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-atom"></i>
            <p>Chemistry</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-bolt"></i>
            <p>Physics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-leaf"></i>
            <p>Environmental Science</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-meteor"></i>
            <p>Astronomy</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-globe-americas"></i>
        <p>
          Social Sciences
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-brain"></i>
            <p>Psychology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-users sociology-icon"></i>
            <p>Sociology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-user-friends"></i>
            <p>Anthropology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-university"></i>
            <p>Political Science</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-money-bill-wave"></i>
            <p>Economics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Humanities
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-newspaper"></i>
            <p>Literature</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-history"></i>
            <p>History</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-landmark"></i>
            <p>Philosophy</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-comment-alt"></i>
            <p>Linguistics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-praying-hands"></i>
            <p>Religious Studies</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-code"></i>
        <p>
          Computer Science
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fab fa-python"></i>
            <p>Programming</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-cogs"></i>
            <p>Algorithms</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-robot"></i>
            <p>Artificial Intelligence</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-project-diagram"></i>
            <p>Data Structures</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-wifi"></i>
            <p>Computer Networks</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-stethoscope"></i>
        <p>
          Health Sciences
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-pills"></i>
            <p>Medicine</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-user-nurse"></i>
            <p>Nursing</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-hospital"></i>
            <p>Public Health</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-apple-alt"></i>
            <p>Nutrition</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-prescription-bottle-alt"></i>
            <p>Pharmacology</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>
          Education
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>Educational Psychology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-school"></i>
            <p>Curriculum Development</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-book-reader"></i>
            <p>Teaching Methods</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-hands-helping"></i>
            <p>Special Education</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-laptop"></i>
            <p>Educational Technology</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>
          Business and Economics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-money-bill"></i>
            <p>Finance</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-dollar-sign"></i>
            <p>Marketing</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-tasks"></i>
            <p>Management</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-pie"></i>
            <p>Microeconomics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-bar"></i>
            <p>Macroeconomics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-paint-brush"></i>
        <p>
          Fine Arts
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="far fa-images"></i>
            <p>Visual Arts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-theater-masks"></i>
            <p>Performing Arts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-music"></i>
            <p>Music</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-film"></i>
            <p>Film Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-landmark"></i>
            <p>Art History</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-phone"></i>
        <p>
          Communication
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-newspaper"></i>
            <p>Journalism</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-film"></i>
            <p>Media Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-bullhorn"></i>
            <p>Public Relations</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-comments"></i>
            <p>Communication Theory</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-satellite-dish"></i>
            <p>Mass Communication</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-recycle"></i>
        <p>
          Environmental Studies
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-seedling"></i>
            <p>Sustainability</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-leaf"></i>
            <p>Conservation Biology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe "></i>
            <p>Environmental Policy</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-cloud-sun"></i>
            <p>Climate Change Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-line"></i>
            <p>Ecological Economics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-balance-scale"></i>
        <p>
          Law
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-gavel law-icon"></i>
            <p>Criminal Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-balance-scale law-icon"></i>
            <p>Constitutional Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe"></i>
            <p>International Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-building"></i>
            <p>Business Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-hands-helping"></i>
            <p>Human Rights Law</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-language"></i>
        <p>
          Languages and Linguistics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe-americas"></i>
            <p>Linguistics Anthropology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-code"></i>
            <p>Syntax and Semantics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-comments"></i>
            <p>Sociolinguistic</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe"></i>
            <p>Translation Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-laptop-code"></i>
            <p>Computational Linguistics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-building"></i>
        <p>
          Architecture and Design
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-building"></i>
            <p>Architectural Design</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-city"></i>
            <p>Urban Planning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-couch"></i>
            <p>Interior Design</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-tree"></i>
            <p>Landscape Architecture</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-leaf"></i>
            <p>Sustainable Design</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>

  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</div>