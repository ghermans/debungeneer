</div><!-- .page-box-content -->
</div><!-- .page-box -->

<footer id="footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyright col-xs-12 col-sm-12 col-md-12">
          <p class="text-right">Copyright © Glenn Hermans, 2017</p>
        </div>

      </div>
    </div>
  </div><!-- .footer-bottom -->
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/nl-be.js"></script>

<script type="text/javascript" src="<?php echo e(url('js/revolution/jquery.themepunch.tools.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('js/revolution/jquery.themepunch.revolution.min.js')); ?>"></script>
<script>

	$(document).ready(function() {

    // check if this day has an event before
    function IsDateHasEvent(date) {
        var allEvents = [];
        allEvents = $('#calendar').fullCalendar('clientEvents');
        var event = $.grep(allEvents, function (v) {
            return +v.start === +date;
        });
        return event.length > 0;
    }

		$('#calendar').fullCalendar({
      height: 750,
      defaultView: 'month',
      minTime: '07:00:00',
      allDaySlot: true,
      slotLabelFormat: 'h A',
      color: '#ff0000',
				textColor: '#ffffff',
				backgroundcolor: '#b30000',
				firstDay: 1,
        theme: false,
			header: {
				left: 'month, basicWeek',
        center: 'title',
				right: 'prev, next'
			},
      buttonText: {
        today: 'Vandaag',
        month: 'Maand',
        week: 'Week',
        day: 'Dag',
        list: 'Overzicht'
      },
			navLinks: false,
			editable: false,
      clickable: false,
      showNonCurrentDates: false,
      locale: 'nl-be',
      dayClick: function(date, jsEvent, view) {
      // Verify the dates
        var myDate = new Date();
        if (date < myDate) {
          return false
        }
        else
        {
          if (!IsDateHasEvent(date)) {
            selectedDate = date;
             window.location = window.location.href + "/reserveren/nieuw/" + date.format();
        }
        else {
            //alert('Deze datum is niet meer beschikbaar');
            $('#myModal').modal('show')
        }
      }
    },
    eventSources: [
       'http://debungeneer.local/kalender/events.json'
     ],


		});
	});
</script>

</body>
</html>
