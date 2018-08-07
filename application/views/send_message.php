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
/*                            $counter = 1;
                            foreach ($receivers as $receiver) :*/?><!--
                                <tr>
                                    <td><?php /*echo $counter;*/?></td>
                                    <td><?php /*echo $receiver['reciever']; */?></td>
                                    <td><?php /*echo $receiver['time']; */?></td>
                                </tr>
                                --><?php
/*                                $counter++;
                            endforeach;*/?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->

                <div class="msg_box" style="right:200px">
                    <div class="msg_head"><?php echo $names;?>
                        <div class="close"><a href="<?php echo base_url('chats')?>">x</a></div>
                    </div>
                    <div class="msg_wrap">
                        <div class="msg_body">
                            <?php
                            foreach ($messages as $msg) :
                                if($msg['sid']==$_SESSION['current_user_id']){
                                ?>
                                    <div class="msg_b"><?php echo $msg['message'];?></div>
                            <?php
                                }else if ($msg['rid']==$_SESSION['current_user_id']){
                                ?>
                                    <div class="msg_a"><?php echo $msg['message'];?></div>
                            <?php
                                }
                                ?>
                            <?php endforeach;?>
                            <div class="msg_push"></div>
                        </div>
                        <div class="msg_footer">
                            <?php echo form_open('savemessage')?>
                                <input type="text" name="sender" value="<?php echo $_SESSION['current_user_id'];?>" hidden>
                            <input type="text" name="receiver" value="<?php echo $to;?>" hidden>
                                <input type="text" name="message" class="msg_input" required style="background-color: #a9dba9; color: black;">
                                <input type="submit" value="send" name="sendMsg" class="send_msg btn btn-primary btn-sm center-block">
                            <?php echo form_close()?>
                        </div>
            </div>
        </div>
    </div>
</div>