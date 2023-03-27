<?php
    {
        for( $i=0; $i<3; $i++ )
        {
        for($j=0; $j<10+$i; $j++ )
        {
            if( $j < 9-$i )
            echo(" ");
            else
            echo("*");
        }
        echo("\n");
        }
        
        for($i=0; $i<4; $i++ )
        {
        for($j=0; $j<19-$i; $j++ )
        {
        if( $j < $i )
        echo(" ");
        else
        echo("*");
        }
        echo("\n");
        }
        
        for($i=3; $i>0; $i--)
        {
        for($j=0; $j<19-$i+1; $j++)
        {
        if( $j < $i-1 )
        echo(" ");
        else
        echo("*");
        }
        echo("\n");
        }
        
        for($i=2; $i>=0; $i-- )
        {
        for($j=0; $j<10+$i; $j++ )
        {
        if( $j < 9-$i )
        echo(" ");
        else
        echo("*");
        }
        echo("\n");
        }
    }
    //////////
?>
