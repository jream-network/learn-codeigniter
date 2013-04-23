<div class="row">
    
    <div id="dashboard-side" class="span4">
        <form id="create_todo" method="post" action="<?=site_url('api/create_todo')?>">
            <input type="text" name="content" placeholder="Create New Todo Item" />
            <input type="submit" value="Create" />
        </form>
        
        <div id="list_todo"><!-- Dynamic --></div>
    </div>
    
    <div id="dashboard-main" class="span8">
        <form id="create_note" method="post" action="<?=site_url('api/create_note')?>">
            <input type="text" name="title" placeholder="Note Title" />
            <textarea name="content"></textarea>
            <input type="submit" value="Create" />
        </form>
        
        <div id="list_note"><!-- Dynamic --></div>
    </div>
    
    
</div>
