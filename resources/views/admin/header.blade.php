<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="{{ url('home') }}" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dashboard </strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">Dash</strong><strong>Board</strong></div></a>
          </div>
          
                
            <div class="list-inline-item logout">  
                    <x-app-layout>
                    </x-app-layout>
    
            </div>
          </div>
        </div>
      </nav>
    </header>