<style>
    li{
        padding-left: 20px;
        padding-right:  15px;
    }
    li:hover{
        border-bottom:  2px solid green;
    }
    a{
        color:green;
        font-size: 14pt  ;
            font-weight: bold
    }
    
</style>

<nav class="navbar navbar-expand-lg " style=" background-color:orange">
  <a class="navbar-brand" href="javascript:void(0)">Logo</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
    </form>
  </div>
</nav>