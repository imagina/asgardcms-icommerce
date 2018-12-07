<div class="table table-discounts">
	<table class="data-table table table-bordered table-hover">
		<thead>
            <tr>
               <th>{{ trans('icommerce::product_discounts.table.quantity') }}</th>
               {{-- <th>{{ trans('icommerce::product_discounts.table.priority') }}</th>--}}
               <th>{{ trans('icommerce::product_discounts.table.price') }}</th>
               <th>{{ trans('icommerce::product_discounts.table.date_start') }}</th>
               <th>{{ trans('icommerce::product_discounts.table.date_end') }}</th>
            </tr>
        </thead>
        <tbody class="items-discounts">
        	<tr class="fil">
        		<td>
        			<input id="dquantity" name="dquantity" placeholder="{{trans('icommerce::product_discounts.table.quantity')}}" min="1" type="number" class="form-control">
        		</td>
            {{--
        		<td>
        			<input id="dpriority" name="dpriority" placeholder="{{trans('icommerce::product_discounts.table.priority')}}" min="1" type="number"  class="form-control">
        		</td>
            --}}
        		<td>
        			<input id="dprice" name="dprice" placeholder="{{trans('icommerce::product_discounts.table.price')}}" min="1"  type="number"  class="form-control" step="0.01">
        		</td>
        		<td>
        			<input id="ddate_start" name="ddate_start" placeholder="{{trans('icommerce::product_discounts.table.ddate_start')}}" type="date"  class="form-control">
        		</td>
        		<td>
        			<input id="ddate_end" name="ddate_end" placeholder="{{trans('icommerce::product_discounts.table.ddate_end')}}" type="date"  class="form-control">
        		</td>
        	</tr>
        </tbody> 
	</table>
</div>

@push('js-stack')

<script type="text/javascript">

$(function(){ 
	
	$( ".content form" ).submit(function(e) {

		var cantempty = 0,cantfull=0;
  		var $inputs = $('.table-discounts :input');

  		$inputs.each(function() {
  			if($(this).val()==""){
  				cantempty++;
  			}else{
  				cantfull++;
  			}
  		});

  		if(cantfull>0 && cantempty>0){
  			alert("{{trans('icommerce::product_discounts.messages.empty')}}");
  			e.preventDefault();
  			return false;
  		}

	});

});
	

</script>
	
@endpush