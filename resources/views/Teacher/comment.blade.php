@extends('layouts.prof')

@section('content')

@foreach($ProfCours as $cours)
{}
@endforeach


<link href="{{ asset('chat.css')}}" rel="stylesheet">
<script src="https://use.fontawesome.com/45e03a14ce.js"></script>

<br><br><br><br>
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="chat_container">
        <div class="col-sm-3 chat_sidebar">
         <div class="row">
            <div id="custom-search-input">
               <div class="input-group col-md-12">
                  <input type="text" class="  search-query form-control" placeholder="Conversation"/>
                  <button class="btn btn-danger" type="button">
                  <span class=" glyphicon glyphicon-search"></span>
                  </button>
               </div>
            </div>
            <div class="dropdown all_conversation">
               <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-weixin" aria-hidden="true"></i>
               All Conversations
               <span class="caret pull-right"></span>
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#"> Conversations </a>  
                    <ul class="sub_menu_ list-unstyled">
                  <li><a href="#"> </a> </li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
               </ul>
               </li>
                  <li><a href="#"></a></li>
               </ul>
            </div>
            <div class="member_list">
               <ul class="list-unstyled">
                  <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Axel OBAMI</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">Classe</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div></div>
         </div>
         <!--chat_sidebar-->
       
       
    <div class="col-sm-9 message_section">
       <div class="row">
       <div class="new_message_head">
       <div class="pull-left"><button><i class="fa fa-plus-square-o" aria-hidden="true"></i> Cours : {{ $cours->coursLib }}</button></div><div class="pull-right">

   </div>
       </div><!--new_message_head-->
       
       <div class="chat_area">
       <ul class="list-unstyled">
           <li class="left clearfix">
                    <span class="chat-img1 pull-left">
                        <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="User Avatar" class="img-circle">
                         </span>
                         <div class="chat-body1 clearfix">
                            <p>Trouver la solution</p>
                      <div class="chat_time pull-right">12:25</div>
                  </div>
            </li>

            <li class="right clearfix">
                    <span class="chat-img1 pull-right">
                        <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="User Avatar" class="img-circle">
                         </span>
                         <div class="chat-body1 clearfix">
                            <p>J'ai pas compris prof</p>
                      <div class="chat_time pull-right">21:30</div>
                  </div>
            </li> 
       </ul>

       </div>
       <form method="post" action="{{ route('Professeur.commenter') }}" id="form">
       <div class="message_write">
       <textarea class="form-control" placeholder="Ecrire votre commentaire sur ce cours" name="message"></textarea>
       <div class="clearfix"></div>
       <div class="chat_bottom"><a href="#" class="pull-left upload_btn"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
           Envoyer un fichier</a>
           <button type="submit" class="pull-right btn btn-success" name="commenter">Commentez</button></div>  
       </div>
       </form>
       </div>
       </div>
      </div>
   </div>
</div>
</div>
</div>

@endsection