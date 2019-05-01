<table bgcolor="#C4C4C4" align="center" width="380" border="0">  
<tr>    
<td  align="center"colspan="2"><font color="#0000FF">Your Output</font></td>  
</tr>    
<tr>    
<td>Your Name is</td>    
<td><input type="text"  value="<?php echo $_POST['name']; ?>" readonly="" /></td>  
</tr>  
<tr>    
<td>Your Email is</td>   
<td><input type="email" value="<?php echo $_POST['email']; ?>" readonly="" /></td>  
</tr>  
<tr>    
<td>Your Password is</td>    
<td><input type="password" value="<?php echo $_POST['password']; ?>" readonly=""  /></td>  
</tr>  
<tr>    
<td>Your Mobile Number is</td>    
<td><input type="number" value="<?php echo $_POST['num']; ?>" readonly=""  /></td>  
</tr>  
<tr>    
<td>Your Address is</td>    
<td><textarea  readonly="readonly"><?php echo $_POST['address'];?></textarea></td>  
</tr>
</table>
