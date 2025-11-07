function  generateUniqueId(){
     return time().str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
 }
