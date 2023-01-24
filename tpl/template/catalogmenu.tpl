
{if isset($smarty.get.group)}
    {assign var=get value=$smarty.get.group}
{else}
    {assign var=get value=0}
{/if}

{function name=menu level=0}
    
    <ul class="level-{$level}"> 
        
        {foreach $data as $k => $v}
            
            <li class="{if $v.id ==$get}active{/if}">
                
                <a href="?group={$v.id}">
                    {$v.name}
                </a> {$v.prods_count}
                {if (is_array($v.child_groups) AND !empty($v.child_groups))}
                    {menu data=$v.child_groups level=$level+1}
                {/if}
                
            </li>
            
        {/foreach}
        
    </ul>
        
{/function}

{menu data=$array}