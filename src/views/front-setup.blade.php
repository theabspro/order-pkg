@if(config('order-pkg.DEV'))
    <?php $order_pkg_prefix = '/packages/abs/order-pkg/src';?>
@else
    <?php $order_pkg_prefix = '';?>
@endif

<script type="text/javascript">
    var order_list_template_url = "{{asset($order_pkg_prefix.'/public/themes/'.$theme.'/order-pkg/order/orders.html')}}";
</script>
<script type="text/javascript" src="{{asset($order_pkg_prefix.'/public/themes/'.$theme.'/order-pkg/order/controller.js')}}"></script>
