<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    
    <title>WebtekLecture | Add Member</title>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
   

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">

             <h2 class="content-header-title cyan"><i class="icon-android-person-add"></i>   Add Member</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
            </div>
          </div>
        </div>
        <div class="content-body">
          {{ csrf_field() }}
<section id="description" class="card">
    <div class="card-body collapse in">
        <div class="card-block">
         {!! Form::open ([ 'action' => 'AdminMemberController@store', 'method' => 'POST']) !!}
<!--             <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Details<i class="icon-android-person purple font-medium-2 float-xs-right"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Membership<i class="icon-ios-body blue font-medium-2 float-xs-right"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Emergency Contact<i class="icon-medkit red font-medium-2 float-xs-right"></i></a>
              </li>
              
            </ul> -->
           <div class="tab-content px-1 pt-1">
              <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
              <div class="col-md-6 col-sm-12">
                <form class="form-horizontal">
                    <fieldset>
            <h4 class="form-section"><i class="icon-profile"></i>Details</h4>
              
                
			    
							  
               <div class="form-group">
                {{Form::label('id_number', 'ID Number')}}
                <div class="position-relative has-icon-left">
                {{Form::text('id_number', '', ['class' => 'form-control round border-success', 'placeholder' => 'ex. 2102456'])}}
                <div class="form-control-position">
                        <i class="icon-credit-card2 warning"></i>
                      </div>
                  </div> 
                </div>
			
                <div class="form-group">
                {{Form::label('first_name', 'First name')}}
                  <div class="position-relative has-icon-left">
                      {{Form::text('first_name', '', ['class' => 'form-control round border-success', 'placeholder' => "The user's first name"])}}
                      <div class="form-control-position">
                        <i class="icon-head warning"></i>
                      </div>
                  </div>               
                </div>
               
              <div class="form-group">
                {{Form::label('middle_initial', 'Middle initial')}}
                <div class="position-relative has-icon-left">
                    {{Form::text('middle_initial', '', ['class' => 'form-control round border-success', 'placeholder' => "The user's middle initial"])}}
                    <div class="form-control-position">
                      <i class="icon-file-empty warning"></i>
                    </div>
                </div>
              </div>
              
              <div class="form-group">
                {{Form::label('last_name', 'Last name')}}
                <div class="position-relative has-icon-left">
                    {{Form::text('last_name', '', ['class' => 'form-control round border-success', 'placeholder' => "The user's last name"])}}
                    <div class="form-control-position">
                      <i class="icon-file-text warning"></i>
                    </div>
                </div>
              </div>
              
              <div class="form-group">
                {{Form::label('nickname', 'Nickname')}}
                <div class="position-relative has-icon-left">
                    {{Form::text('nickname', '', ['class' => 'form-control round border-success', 'placeholder' => "The user's nickname"])}}
                    <div class="form-control-position">
                      <i class="icon-smile2 warning"></i>
                    </div>
                </div>
              </div>
              
              <div class="col-md-6">
              <div class="form-group">
                {{Form::label('sex', 'Sex')}}
                <div class="position-relative has-icon-left">
                    {{Form::select('sex', array('male' => 'male', 'female' => 'female'),'', ['class' => 'form-control round border-success'])}}
                    <div class="form-control-position">
                      <i class="icon-intersex warning"></i>
                    </div>
                </div>
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                {{Form::label('birthdate', 'Birthdate')}}
                <div class="position-relative has-icon-left">
                    {{Form::date('birthdate','', ['class' => 'form-control round border-success'])}}
                    <div class="form-control-position">
                      <i class="icon-calendar5 warning"></i>
                    </div>
                </div>
              </div>
              </div>
              
              <div class="col-md-6">
              <div class="form-group">
                {{Form::label('civil_status', 'Civil status')}}
                <div class="position-relative has-icon-left">
                    {{Form::select('civil_status', array('single' => 'single', 'married' => 'married', 'widowed' => 'widowed', 'separated' => 'separated'),'', ['class' => 'form-control round border-success'])}}
                    <div class="form-control-position">
                      <i class="icon-circle warning"></i>
                    </div>
                </div>
              </div>
              </div>
            
              
            
        </div>
                            
              <div class="col-md-6 col-sm-12">
                <form class="form-horizontal">
                    <fieldset>
                       
      

            <h4 class="form-section"><i class="icon-mail6"></i>Contact</h4>

              <div class="form-group">
                     {{Form::label('address', 'Address')}}
                <div class="position-relative has-icon-left">
                    {{Form::text('address', '', ['class' => 'form-control round border-info', 'placeholder' => "The user's address"])}}
                    <div class="form-control-position">
                      <i class="icon-home2 danger"></i>
                    </div>
                </div>
              </div>
              
              <div class="form-group">
                     {{Form::label('contact_no', 'Contact number')}}
                <div class="position-relative has-icon-left">
                    {{Form::text('contact_no', '', ['class' => 'form-control round border-info', 'placeholder' => "The user's contact number"])}}
                    <div class="form-control-position">
                      <i class="icon-credit-card2 danger"></i>
                    </div>
                </div>
              </div>
              
              <div class="form-group">
                     {{Form::label('emergency_contact', 'Emergency contact')}}
                <div class="position-relative has-icon-left">
                    {{Form::text('emergency_contact', '', ['class' => 'form-control round border-info', 'placeholder' => "The user's contact in case of an emergency"])}}
                    <div class="form-control-position">
                      <i class="icon-ios-contact danger"></i>
                    </div>
                </div>
              </div>
              
              <div class="form-group">
                     {{Form::label('emergency_no', 'Emergency no')}}
                <div class="position-relative has-icon-left">
                     {{Form::text('emergency_no', '', ['class' => 'form-control round border-info', 'placeholder' => "The emergency contact's contact number"])}}
                    <div class="form-control-position">
                      <i class="icon-cc-mastercard danger"></i>
                    </div>
                </div>
              </div>
              
              <div class="form-group">
                     {{Form::label('email_address', 'Email address')}}
                <div class="position-relative has-icon-left">
                     {{Form::text('email_address', '', ['class' => 'form-control round border-info', 'placeholder' => "The user's e-mail address"])}}
                    <div class="form-control-position">
                      <i class="icon-email-unread danger"></i>
                    </div>
                </div>
              </div>

                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                            
                            </fieldset>
                            </form>
                                </div>
              </div>
            </div>
             {!! Form::close() !!} 
          </div>
    </div>
</section>
        </div>
      </div>
    </div>
    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-center d-xs-block d-md-inline-block">Copyright  &copy; 2018 <b>ALTITUDEGYM</b> </a>, All rights reserved. </span></p>
    </footer>
    @include('admin.layouts.scripts') 
  </body>
</html>
