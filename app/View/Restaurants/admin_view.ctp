<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>
<div class="content">
    <div class="header">
        <h2 style="margin-top:0px;">View Deal</h2>
        <ul class="breadcrumb">
            <li><a href="<?php echo $this->Html->url('/admin/Restaurants/'); ?>">Deal Management</a> </li>
            <li class="active">View Deal</li>
        </ul>
    </div>
 
        <p>
            <?php
            // debug($restaurant);exit;
            $x = $this->Session->flash();
            ?>
<?php if ($x) { ?>
            <div class="alert success">
                <span class="icon"></span>
                <strong></strong><?php echo $x; ?>
            </div>
<?php } ?>
        </p>
        
        
       
        <div class="main-content">
        <div class="box box-primary">
<?php echo $this->Form->create('Restaurant'); ?>
            <div class="admin_outer">
                <div class="restaurant_table2">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo h($restaurant['Restaurant']['name']); ?></td>
                                </tr>
                                <tr>
                                    <th>Deal Category</th>
                                    <td><?php echo h($restaurant['Cat']['rest_type']); ?></td>
                                </tr>
                              
<!--                                <tr>
                                    <th>Phone</th>
                                    <td><?php //echo h($restaurant['Restaurant']['phone']); ?></td>
                                </tr>
                                <tr>
                                    <th>Owner Name</th>
                                    <td><?php //echo h($restaurant['Restaurant']['owner_name']); ?></td>
                                </tr>
                                <tr>
                                    <th>Owner Phone</th>
                                    <td><?php //echo h($restaurant['Restaurant']['owner_phone']); ?></td>
                                </tr>-->
                                <tr>
                                    <th>Address</th>
                                    <td><?php echo h($restaurant['Restaurant']['address']); ?></td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td><?php echo h($restaurant['Restaurant']['city']); ?></td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td><?php echo h($restaurant['Restaurant']['state']); ?></td>
                                </tr>
                                <tr>
                                    <th>Zip</th>
                                    <td><?php echo h($restaurant['Restaurant']['zip']); ?></td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td><?php echo h($restaurant['Restaurant']['description']); ?></td>
                                </tr>
                                <tr>
                                    <th>Deal</th>
                                    <td><?php echo h($restaurant['Restaurant']['deals']); ?></td>
                                </tr>
                                <tr>
                                    <th>Logo</th>
                                    <td>
                                        <?php 
                                        $restaurantPath = '/files/restaurants/';
                                        echo $this->Html->image($restaurantPath . h($restaurant['Restaurant']['logo']), array('alt' => 'Store Logo', 'width' => 100));
                                        
                                       // echo h($restaurant['Restaurant']['logo']); ?></td>
                                </tr>
                                <tr>
                                    <th>Marker</th>
                                    <td>
                                        <?php 
                                        $restaurantPath = '/files/restaurants/';
                                        echo $this->Html->image($restaurantPath . h($restaurant['Restaurant']['marker']), array('alt' => 'Store Logo', 'width' => 100));
                                        
                                       // echo h($restaurant['Restaurant']['logo']); ?></td>
                                </tr>
<!--                                <tr>
                                    <th>Website</th>
                                    <td><?php //echo h($restaurant['Restaurant']['website']); ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php //echo h($restaurant['Restaurant']['email']); ?></td>
                                </tr>
                                
                                
                                <tr>
                                    <th>Visibility Radius</th>
                                    <td><?php //echo h($restaurant['Restaurant']['delivery_distance']); ?></td>
                                </tr>-->
                                
<!--                                <tr>
                                    <th>Dining</th>
                                    <td><?php //echo h($restaurant['Restaurant']['reservation'] == 1) ? "Yes" : "No"; ?></td>
                                </tr>
                               
                                <tr>
                                    <th>Pickup</th>
                                    <td><?php //echo h($restaurant['Restaurant']['takeaway'] == 1) ? " Yes" : "No"; ?></td>
                                </tr>
                        
                                <tr>
                                    <th>Latitude</th>
                                    <td><?php //echo h($restaurant['Restaurant']['latitude']); ?></td>
                                </tr>
                                <tr>
                                    <th>Longitude</th>
                                    <td><?php //echo h($restaurant['Restaurant']['longitude']); ?></td>
                                </tr>
                               
                         
                                 <tr>
                                    <th>Commission Pickup Order</th>
                                    <td><?php// echo h($restaurant['Restaurant']['commission_pick']); ?></td>
                                </tr>
                                 <tr>
                                    <th>Commission Dining Order</th>
                                    <td><?php //echo h($restaurant['Restaurant']['commission_tr']); ?></td>
                                </tr>-->
<!--                                     <tr>
                                    <th>Sponsored</th>
                                    <td><?php //echo h($restaurant['Restaurant']['sponsored'] == 1) ? "Yes" : "No"; ?></td>
                                </tr>-->
                               
<!--                                <tr>
                                    <th>Status</th>
                                    <td><?php //echo h($restaurant['Restaurant']['status'] == 1) ? "Active" : "Inactive"; ?></td>
                                </tr>-->
                            </thead>
                        </table>
                    </div>
                </div>


                <div class="button_outer">
                  
<?php //echo $this->Html->link('View all Product', array('controller' => 'products', 'action' => 'resindex',$restaurant['Restaurant']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
<!--                        <tr>
                            <th>Image</th>
                            <th>Dishcategory</th>
                            <th>Dishsubcat</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Weight</th>
                            <th>Size</th>
                            <th>Active</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th class="actions">Actions</th>
                        </tr>-->
<?php foreach ($products as $product): ?>
<!--                            <tr>
                                <td><?php echo $this->Html->Image('/files/product/' . $product['Product']['image'], array('width' => 100, 'height' => 100, 'alt' => $product['Product']['image'], 'class' => 'image')); ?></td>
                                <td><span class="category" data-value="<?php echo $product['DishCategory']['id']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['DishCategory']['name']; ?></span></td>
                                <td><span class="brand" data-value="<?php echo $product['DishSubcat']['id']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['DishSubcat']['name']; ?></span></td>
                                <td><span class="name" data-value="<?php echo $product['Product']['name']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['name']; ?></span></td>
                                <td><span class="description" data-value="<?php echo $product['Product']['description']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['description']; ?></span></td>
                                <td><span class="price" data-value="<?php echo $product['Product']['price']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['price']; ?></span></td>
                                <td><span class="weight" data-value="<?php echo $product['Product']['weight']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['weight']; ?></span></td>
                                <td><span class="sizes" data-value="<?php echo $product['Product']['sizes']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['sizes']; ?></span></td>
                                <td><?php echo $this->Html->link($this->Html->image('icon_' . $product['Product']['active'] . '.png'), array('controller' => 'products', 'action' => 'switch', 'active', $product['Product']['id']), array('class' => 'status', 'escape' => false)); ?></td>
                                <td><?php echo h($product['Product']['created']); ?></td>
                                <td><?php echo h($product['Product']['modified']); ?></td>
                                <td class="actions">
                                    <?php echo $this->Html->link('View', array('controller' => 'products', 'action' => 'resview', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
    <?php echo $this->Html->link('Edit', array('controller' => 'products', 'action' => 'resedit', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                </td>
                            </tr>-->
<?php endforeach; ?>

                    </table>

<!--                    <p  class="add-author">Add table in restaurant</p>-->
                    <table class="authors-list">
                        <tr>
                            <?php
                            // print_r($rdata);
                            $var = end($rdata);
                            //echo  $cnt=end($rdata);
                            //  echo $var['Restable']['tableno']+1;
//                            foreach ($rdata as $cartdatas) {
//                                ?>
<!--                                <td><a href="http://rajdeep.crystalbiltech.com/cart_new/custom_cart/admin/restaurants/menudetai///<?php echo $cartdatas['Restable']['res_id']; ?>/<?php echo $cartdatas['Restable']['tableno']; ?>"><?php echo $cartdatas['Restable']['tableno']; ?><span class="authors-booked"></span></a></td>-->
                            <?php //} ?>
                        </tr>
                    </table>



                </div>
            </div>
            </div>
            </div>
           
          
            
            <script type="text/javascript">
                $(document).ready(function () {
                    var counter = '<?php echo $var['Restable']['tableno'] + 1; ?>';
                    jQuery('p.add-author').click(function (event) {
                        $.post('http://rajdeep.crystalbiltech.com/dropin/admin/restaurants/addtableresrv', {tno: counter, resid:<?php echo $restaurant['Restaurant']['id']; ?>}, function (d) {

                            var newRow = jQuery('<td><a href="http://rajdeep.crystalbiltech.com/dropin/admin/restaurants/menudetai/<?php echo $restaurant['Restaurant']['id']; ?>/' + counter + '">' + counter + '</a></td>');
                            jQuery('table.authors-list tr').append(newRow);
                            counter++;

                        });
                    });
                });
            </script>      

            <style>
                .authors-booked {
                    width: 5px;
                    height: 5px;
                    background: #ff0000;
                    float: left;
                    border-radius: 50%;
                }
                .authors-unbooked {
                    width: 5px;
                    height: 5px;
                    background: #fff;
                    float: left;
                    border-radius: 50%;
                }

            </style>
