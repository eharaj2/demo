@if(\Session::has('error_msg'))
                <div class="row">
                  <div class="alert bg-danger alert-dismissible col-12">
                     <button class="close" area-hidden='true' data-dismiss='alert'>x</button>
                      {{\Session::get('error_msg')}}
                  </div>
                </div>
                @endif
               @if(\Session::has('success_msg'))
                <div class="row">
                  <div class="alert bg-success alert-dismissible col-12">
                     <button class="close" area-hidden='true' data-dismiss='alert'>x</button>
                      {{\Session::get('success_msg')}}
                  </div>
                </div>
               @endif