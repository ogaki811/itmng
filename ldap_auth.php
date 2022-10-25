<?php
$ldaphost = '10.4.16.157';
$ldapport = 389;

$ldapconn = ldap_connect($ldaphost, $ldapport) 
      or die('Unabled to connect to the server');
ldap_set_option( $ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option( $ldapconn, LDAP_OPT_REFERRALS, 0);
$samaccountname = 'j-yoyamaguchi';


if($ldapconn){
     $ldapbind = ldap_bind($ldapconn, 'j-yoyamaguchi@plus.co.jp', 'DnF+Ey4C');
     if($ldapbind){
           $bind_message = 'LDAP bind succeeded';
           echo $bind_message."\n";
           $attrs = array( 'displayName' );
           $result = ldap_search($ldapconn, "DC=plus, DC=co, DC=jp","(sAMAccountName=$samaccountname)",$attrs);
           $info = ldap_get_entries( $ldapconn, $result );
           echo $info[0]['displayname'][0];
     }
else{
          echo 'LDAP bind failed.';
     }
}
else{
     echo 'LDAP connect failed.';
}


?>