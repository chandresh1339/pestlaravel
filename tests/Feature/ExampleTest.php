<?php
test('application home page is loading',function(){
    $response=$this->get('/');  
    $response->assertStatus(200);
});
?>