<?php
/*
Template Name: form
*/
?>



<main id="site-content" role="main">

     <?php get_header(); ?>

     
     <form role="form" method="POST">
        <table>
            <tr>    <td>Name:</td>
                    <td> <input type="text" name="your_name"/>
                    </td>
            </tr>
            <tr>    <td>Email:</td>
                    <td> <input type="email" name="your_email"/>
                    </td> 
            </tr>
            <tr>    <td>Message:</td>
                    <td> <textarea type="text" name="your_message"></textarea>
                    </td> 
            </tr>
            <tr>    
                    <td>
                    <button type="submit" value="submit" name="save_data">Submit</button> 
                    </td> 
            </tr>
        </table> 
    </form>

    <?php
    
    if(isset($_POST['save_data']))
    {
        global $wpdb;

        $form_data = array(
            'name' => $_POST['your_name'],
            'email' => $_POST['your_email'],
            'message' => $_POST['your_message'],
        );

        $sql = $wpdb->insert('data', $form_data);

        if ($sql == true){
            echo "<script>alert('Data Submitted Succesfully')</script>";
        }else{
            echo "<script>alert('Something is wrong! Try Again')</script>";
        }
    }
    

    ?>
    
	
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
