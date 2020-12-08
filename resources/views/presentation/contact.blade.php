
@extends('layouts.info')

@section('content')

        
        <!-- main header ends-->
        <section id="address" class="address page-top">
            <div class="container">
                <div class="row">
                    
                        <div class="col-md-6">
                        <div class="address-wrapper wow fadeInUp" data-wow-delay="0.3s">
                        <h1>Notre adresse</h1>
                        <table class="address-table">
                                <tbody>
                                    <tr>
                                        <td>Location</td>
                                        <td>House No.124, Road No.1, CV<br>Pointe-Noire</td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td>+242066574602</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>naschool@info.com</td>
                                    </tr>
                                    <tr>
                                        <td>Facebook:</td>
                                        <td>facebook.com/pages/naschool</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                    </div>
                    <div class="col-md-6">
                    <div class="map-wrapper wow fadeInUp" data-wow-delay="0.6s">
                        <div id="map"></div>                     
                    </div>
                    </div>
                    
                    
            </div>
            </div>
        </section>

        <section id="email-us" class="email-us page">
            <div class="container wow fadeInUp" data-wow-delay="0.3s">
                <div class="row">
                    
                    <div class="col-md-6">
                    <div class="email-wrapper">
                        <h1>Email Us</h1>
                        <div class="section-snippet hidden-xs">
                          <span class="snippet-heading">Cordial &amp; Helpful</span>
                          <span>support staff</span>  
                        </div>

                        <div class="section-snippet hidden-xs">
                          <span class="snippet-heading">max 24 hours</span>
                          <span>reply within</span>  
                        </div>
                     </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrapper">
                          <form id="contact-form" action="inc/send_mail.php">
                              <label for="name">Votre nom:</label>
                              <input type="text" name="name" id="name" placeholder="your name">
                              <label for="email">Votre mail:</label>
                              <input type="email" name="email" id="email" placeholder="your email">
                              <label for="message">Message:</label>
                              <textarea name="message" id="message" placeholder="message"></textarea>
                              <input class="custom-button" type="submit" name="submit" value="send message">

                          </form> 
                                        
                    </div>
                    </div>

                </div>
            </div>
        </section>

@endsection

