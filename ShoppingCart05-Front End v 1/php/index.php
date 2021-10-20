<!DOCTYPE html>
<html lang="eng">
<head> 
   <meta charset="=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name="viewport" content="width=device=width",initial scale-scale="1.0">
   <title> Design Igloo </title> 
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
   <!--division for left sided navigation-->     
   <div class="navigation-left">
    <img src="sourceimages/logoxx.png" alt="DesignIglooLOGO">
    <ul>
        <li> <a class="active" href="#"> <img src="sourceimages/inbox.png"> </a> </li>
        <li> <img src="sourceimages/mentions.png"> </li>
    </ul>
   </div>

   <!--1.division for right sided navigation-->
   <!--2.division for search box-->
   <!--3.division for user icon-->
   <div class="navigation-right">

    <div class="search-box">
        <img src="sourceimages/search.png">
        <input type="text" placeholder="Search Here">
    </div>

    <div class="navigation-user-icon online" onclick="settingsmenuToggle()">
        <img src="sourceimages/profile-pic.png">
    </div>
   </div>
<!--This is a dropdown menu for the user profile-->
   <div class="settingsmenu">
     <div id="darkbtn">
         <span>

         </span>
     </div>  
       <div class="inner-settings-menu">
        <div class="user-profile">
            <img src="sourceimages/profile-pic.png" alt="">
            <div>
                <p> Mehluli Dlamini</p>
               <a href="#"> View Profile </a>
            </div>
        </div>
        <hr>
        <div class="user-profile">
            <img src="sourceimages/Feedback.png" alt="">
            <div>
                <p> Feeback and Reviews </p>
               <a href="#"> Help Improve Our Community </a>
            </div>
        </div>
        <hr>
        <div class="settingslink">
            <img src="sourceimages/Settings.png" class="settings-icon">
            <a href="#"> Settings and Privacy <img src="sourceimages/arrow.png"
            width="10px"></a>
        </div>
        <div class="settingslink">
            <img src="sourceimages/Help.png" class="settings-icon">
            <a href="#"> Help <img src="sourceimages/arrow.png"
            width="10px"></a>
        </div>
        <div class="settingslink">
            <img src="sourceimages/Accessibility.png" class="settings-icon">
            <a href="#"> Accessibility <img src="sourceimages/arrow.png"
            width="10px"></a>
        </div>
        <div class="settingslink">
            <img src="sourceimages/Logout.png" class="settings-icon">
            <a href="#"> Signout <img src="sourceimages/arrow.png"
            width="10px"></a>
        </div>
       </div>
        
   </div>
    </nav>
<!--Adding A 3 Columned Container-->
<div class="container">

    <!--Left sidebar-->
    <div class="left-sidebar">
        <div class="important-links">
            <a href="#"><img src="sourceimages/newsletter.png"> Designer News </a>
            <a href="#"><img src="sourceimages/friends.png"> Your Friends </a>
            <a href="#"><img src="sourceimages/groups.png"> Your Groups </a>
            <a href="#"><img src="sourceimages/marketplace.png"> MarketPlace </a>
            <a href="#"><img src="sourceimages/youtube.png"> Youtube</a>
            <a href="#"> Your Subscriptions </a>
        </div>
   

    <div class="shortcut-links">
        <p>Your Shortcuts</p>
         <a href="#"> <img src="sourceimages/abstractdesign.jpg"> Abstract Design</a>  
         <a href="#"> <img src="sourceimages/abstractarchitecture.jfif"> Architecture Design</a>
         <a href="#"> <img src="sourceimages/abstractcivil.jpg"> Built Environment Design</a>
         <a href="#"> <img src="sourceimages/abstractlandscape.jfif"> Nature and Landscape Design</a>   
    </div>
    </div>
<!--newsfeed-->
<div class="newsfeed">
<div class="story-gallery">
    <div class="story story1">
        <img src="sourceimages/upload.png">
        <p>Post Story</p>
    </div>

<div class="story story2">
    <img src="sourceimages/member-1.png">
    <p>Mehluli</p>
</div>

<div class="story story3">
    <img src="sourceimages/member-2.png" >
    <p>Zoe</p>
</div>

<div class="story story4">
    <img src="sourceimages/member-3.png">
    <p>Ompone</p>
</div>

<div class="story story5">
    <img src="sourceimages/member-4.png">
    <p>Ndumiso</p>
</div>
</div>

<div class="type-your-message-container">
    <div class="user-profile">
        <img src="sourceimages/profile-pic.png" alt="">
        <div>
            <p> Mehluli Dlamini</p>
            <small>Public <i class="fas fa-caret-down"></i></small>
        </div>
    </div>
    <div class="message-input-container">
        <textarea rows="3" placeholder="Any design ideas?"></textarea>
        <div class="add-message-links">
            <a href="#"><img src="sourceimages/Post Icons/live video.png" onclick="myFunction()"> Live Video</a>
            <a href="#"><img src="sourceimages/Post Icons/camera.png"> Open Camera</a>
            <a href="#"><img src="sourceimages/Post Icons/emotions.png"> Your Feelings/Activity</a>
        </div>
    </div>
</div>

<div class="message-container">
    <div class="user-profile">
        <img src="sourceimages/profile-pic.png" alt="">
        <div>
            <p> Mehluli Dlamini</p>
            <span> 17 August 2021, 14:00 pm</span>
        </div>
    </div>
    <p class="post-text"> Hi there! <span>I am new to the website and I would like to get to know people and share my ideas. Here's a picture of me and my friends designing things. dlaminim@icloud.com and check my youtube channel </span></subscribe> <a href="#"> Insane CQ Designs</a> </p>
    <img src="sourceimages/feed-image-1.png" class="post-image">

    <div class="post-row">
        <div class="activity-icons">
<div><img src="sourceimages/Icons/like.png">3</div>
<div><img src="sourceimages/Icons/comment.png">0</div>
<div><img src="sourceimages/Icons/share.png">7</div>
        </div>
        <div class="post-profile-icon">
<img src="sourceimages/profile-pic.png"> <i class="fas fa-caret-down"></i>

        </div>
    </div>
</div>
<div class="message-container">
    <div class="user-profile">
        <img src="sourceimages/profile-pic.png" alt="">
        <div>
            <p> Belusiwe Dlamini</p>
            <span> 18 August 2021, 09:20 am</span>
        </div>
    </div>
    <p class="post-text"> Civil Engineer and Town Planner.
        <span>
       Checkout my latest designs for this cool project I have partnered with ABC Designs on
       .Follow the link for more.</span>
    <img src="sourceimages/feed-image-2.png" class="post-image">

    <div class="post-row">
        <div class="activity-icons">
<div><img src="sourceimages/Icons/like.png">56</div>
<div><img src="sourceimages/Icons/comment.png">23</div>
<div><img src="sourceimages/Icons/share.png">71</div>
        </div>
        <div class="post-profile-icon">
<img src="sourceimages/profile-pic.png"> <i class="fas fa-caret-down"></i>

        </div>
    </div>
</div>
<!--Third Post-->
<div class="message-container">
    <div class="user-profile">
        <img src="sourceimages/profile-pic.png" alt="">
        <div>
            <p> Phila Dlamini</p>
            <span> 22 August 2021, 10:30 am</span>
        </div>
    </div>
    <p class="post-text"> Environment Specialist @ DEA South Africa.<i class="fa-solid fa-flag"></i>
        <span>
       I oversee the environmental impact of large scale and practical designs. Here to give my expert opinion , literally.</span>
    <img src="sourceimages/feed-image-3.png" class="post-image">

    <div class="post-row">
        <div class="activity-icons">
<div><img src="sourceimages/Icons/like.png">11</div>
<div><img src="sourceimages/Icons/comment.png">4</div>
<div><img src="sourceimages/Icons/share.png">3</div>
        </div>
        <div class="post-profile-icon">
<img src="sourceimages/profile-pic.png"> <i class="fas fa-caret-down"></i>

        </div>
    </div>
</div>
<button type="button" class="load-more-button">Load More</button>
</div>

<!--right sidebar-->
<div class="right-sidebar">

    <div class="sidebar-title">
        <h4> Events</h4>
        <a href="#"> See All</a>
    </div>

<div class="event">
    <div class="left-event">
    <h3>18</h3>
    <span>August</span>
</div>

    <div class="right-event">
    <h4>Virtual Design Expo</h4>
    <p><i class="fas fa-map-marker-alt"></i> Microsoft Teams</p>
    <a href="#"> More Information About Event</a>
</div>
</div>

<div class="event">
    <div class="left-event">
    <h3>30</h3>
    <span>August</span>
</div>

    <div class="right-event">
    <h4>Demo Presentation</h4>
    <p><i class="fas fa-map-marker-alt"></i> Blackboard CPUT</p>
    <a href="#"> More Information About Event</a>
</div>

</div>
<div class="sidebar-title">
    <h4> Personalised Ads </h4>
    <a href="#"> Close </a>
    
</div>
<img src="sourceimages/personalised-ad.jfif" class="sidebar-ads">
<div class="sidebar-title">
    <h4> Tailored Coversations </h4>
    <a href="#"> Hide Conversations</a>
</div>

<div class="online-list">
    <div class="online">
        <img src="sourceimages/member-1.png" alt="Image of User">  
    </div>
    <p> Mehluli Dlamini</p>
</div>

    <div class="online-list">
        <div class="online">
            <img src="sourceimages/member-2.png" alt="Image of User">  
        </div>
        <p>Ndumiso Habile</p>
    </div>

        <div class="online-list">
            <div class="online">
                <img src="sourceimages/member-3.png" alt="Image of User">
            </div>
            <p>Esihle Yekani</p>
        </div>
</div>

</div>
</div>
<div class="footer">Copyright 2021 Design Igloo. Under license of parent company Uno Project COR.</div>
<script src="script.js">

</script>
</body>
</html>
