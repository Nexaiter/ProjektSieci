{extends file="main.tpl"}

{block name=top}

    

{/block}


{block name=bottom}

    
    
    <table id="tab_user" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>login</th>
            <th>password</th>
            <th>permission</th>
        </tr>
    </thead>
    <tbody>
    {foreach $user as $u}
    {strip}
        <tr>
            <td>{$u["login"]}</td>
            <td>{$u["password"]}</td>
            <td>{$u["permission"]}</td>            
        </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>
    
    {/block}
    