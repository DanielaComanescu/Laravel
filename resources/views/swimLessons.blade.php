@extends('layouts.base')

@section('title', 'Swim Lessons')
@section('css', 'lessons')

@section('content')

<div class="pgLessons">
    <div class="firstBlock">
        <img id="fond" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV_A05Ub4xGnUoplbxeK7xZ3qVe3l5_ul_nA&usqp=CAU">
    
         <h2> Our swim lessons </h2>

        <p class="description"> Wheter you want to introduce into learning to swim or you want to advance your swimming skills, our lessons are perfect for you. Choose your level and enjoy! </p>
    </div>

    <div class="secondBlock">
        <h3> Need help to choose wich lesson is apropriate for you? Find detailed information about each lesson below</h3>
        <h3> Please visit our <a href="#"> Health and Safety Measures page </a> before to book a lesson </h3>
    </div>

    <div class="begginer">
        <h3 id="begginer"> Begginer lessons </h3>
        <div class="littleParent">
            <img class="img" src="https://blog.intheswim.com/wp-content/uploads/2014/10/learning-to-swim.jpg">
            <div class="columnParent">
                <p id="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin efficitur lorem, quis pellentesque purus ullamcorper vel. Donec rhoncus quis elit ut feugiat. Pellentesque eget finibus turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis sapien, iaculis nec mi vitae, vehicula finibus mi. Morbi faucibus, mauris a condimentum interdum, tellus mauris lobortis eros, id imperdiet ipsum justo at ligula. Phasellus ultricies elit eget ex rhoncus, ut porta massa imperdiet. In hac habitasse platea dictumst. Praesent a orci vel nisi mollis aliquet. Praesent malesuada metus ut consectetur pulvinar. Nam sollicitudin ornare massa, vitae auctor est sodales id. </p>
                <div class="btn">
                    @if (Auth::check()) 
                        <a href="/listAllLessons">Book</a>
                    @else
                        <a href="/connexion"> Book </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="intermediaire">
        <h3 id="intermediaire"> Intermediaire lessons </h3>
        <div class="littleParent">
            <div class="columnParent">
                <p id="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin efficitur lorem, quis pellentesque purus ullamcorper vel. Donec rhoncus quis elit ut feugiat. Pellentesque eget finibus turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis sapien, iaculis nec mi vitae, vehicula finibus mi. Morbi faucibus, mauris a condimentum interdum, tellus mauris lobortis eros, id imperdiet ipsum justo at ligula. Phasellus ultricies elit eget ex rhoncus, ut porta massa imperdiet. In hac habitasse platea dictumst. Praesent a orci vel nisi mollis aliquet. Praesent malesuada metus ut consectetur pulvinar. Nam sollicitudin ornare massa, vitae auctor est sodales id. </p>
                <div class="btn">
                    @if (Auth::check()) 
                        <a href="/listAllLessons">Book</a>
                    @else
                        <a href="/connexion"> Book </a>
                    @endif
                </div>
            </div>
                
            <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ohJApUQT6jZJrYAfWw2LNNT32yP0h3k7Ec7ZaArBtHCo91vlId-iXdDghBzyxNt-0v4&usqp=CAU">  
        </div>
    </div>

    <div class="advanced">
        <h3 id="advanced"> Advanced lessons </h3>
        <div class="littleParent">
            <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu33CxvJOi3bHCJWHAVhnFVLsjZDrc71FVfVBWIqrVAsbnTNWnHNXQaiIE79sK4rw6eSA&usqp=CAU">
            <div class="columnParent">
                <p id="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin efficitur lorem, quis pellentesque purus ullamcorper vel. Donec rhoncus quis elit ut feugiat. Pellentesque eget finibus turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent turpis sapien, iaculis nec mi vitae, vehicula finibus mi. Morbi faucibus, mauris a condimentum interdum, tellus mauris lobortis eros, id imperdiet ipsum justo at ligula. Phasellus ultricies elit eget ex rhoncus, ut porta massa imperdiet. In hac habitasse platea dictumst. Praesent a orci vel nisi mollis aliquet. Praesent malesuada metus ut consectetur pulvinar. Nam sollicitudin ornare massa, vitae auctor est sodales id. </p>
                <div class="btn">
                    @if (Auth::check()) 
                        <a href="/listAllLessons">Book</a>
                    @else
                        <a href="/connexion"> Book </a>
                    @endif
                </div>
            </div>
        </div>      
    </div>
    
</div>
@endsection
