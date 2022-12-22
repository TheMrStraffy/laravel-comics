
<div class="jumbotron ">
  <img class="jmbimg" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron.jpg">
  <div class="currentSeries">
    CURRENT SERIES
  </div>
</div>


  <style lang="scss" scoped>
  .jumbotron{
    position: relative;
  }
  .currentSeries{
      position: absolute;
      bottom: -5%;
      left: 10%;
      font-size: 1.3rem;
      font-weight: 600;
      background-color: #0282f9;
      color: white;
      padding: 10px 25px;
    }
  .jmbimg{
      width: 100%;
     height: 400px;
     object-fit: cover;
     object-position: top;
   }
  </style>
