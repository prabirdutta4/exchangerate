<?php $__env->startSection('content'); ?>
<div class="row">
<div class="slidePanel slidePanel-right slidePanel-show" style="transform: translate3d(0%, 0px, 0px); top: 68px; bottom: 0;width: 79%;"><div class="slidePanel-scrollable scrollable is-enabled scrollable-vertical" style="position: relative;"><div class="scrollable-container"><div class="slidePanel-content scrollable-content">

<div class="slidePanel-inner">
  <div class="slidePanel-main"></div>
  <div class="slidePanel-messages">
  
  
  </div>
  
  
  <div class="slidePanel-comment">
  <button onclick="getLocation()" class="btn btn-primary loadingclick" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading.."  type="submit"> <?php echo e(trans('app.attendance')); ?> </button>
  </div>
  <p id="demo"></p>
</div>

</div>
</div>
<div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide" draggable="false"><div class="scrollable-bar-handle" style="height: 77.989px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
<div class="slidePanel-handler"></div>
<div class="slidePanel-loading"><div class="loader loader-default"></div></div>
</div>
</div>
<br/>
<div style="clearboth;"></div>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>

var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
 // x.innerHTML = "Latitude: " + position.coords.latitude + 
 // "<br>Longitude: " + position.coords.longitude;
  var lat = position.coords.latitude;
  var long = position.coords.longitude;

  
            var latlng = new google.maps.LatLng(lat, long);
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        alert("Location: " + results[1].formatted_address);
                    }
                }
            });



  var form_data = {
            latitude: lat,
            longitude: long
        };
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '<?php echo url("attendance/save/"); ?>',
            data: form_data,
            success: function (msg) { debugger;
                var obj = $.parseJSON(msg);
                swal(obj);
               /* $("#name").val(obj['name']);
                $("#code").val(obj['code']);
                $("#short_code").val(obj['short_code']);
                $("#id").val(obj['id']); */
            }
        }); 
}




</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>