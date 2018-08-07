<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="module">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Messages</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $counter = 1;
                                if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
                                    foreach ($receivers as $receiver) :
                                    ?>
                                    <tr>
                                        <td><?php echo $counter;?></td>
                                        <td><a href="<?php echo 'sendmessage/'.$receiver['rid']?>"><?php echo $receiver['reciever']; ?></a></td>
                                        <td><?php echo $receiver['time']; ?></td>
                                    </tr>

                                    <?php
                                    $counter++;
                                    endforeach;
                                }else{
                                    foreach ($receivers as $receiver) :
                                        ?>
                                        <tr>
                                            <td><?php echo $counter;?></td>
                                            <td><a href="<?php echo 'sendmessage/'.$receiver['sid']?>"><?php echo $receiver['sender']; ?></a></td>
                                            <td><?php echo $receiver['time']; ?></td>
                                        </tr>

                                        <?php
                                        $counter++;
                                    endforeach;
                                }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>

        </div>
    </div>
</div>