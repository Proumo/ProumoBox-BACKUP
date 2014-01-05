<div id="arvore_diretorios" class="span4 frame_sdk" ng-controller="ArvoreDiretorioController">
    <header> 
        <div>
            <div  id="ops_ger_arqs_dirs"> 
                <i class="fa fa-cloud-upload tooltiper" data-original-title="Push GitHub"></i>
                <i class="fa fa-cloud-download tooltiper" data-original-title="Pull GitHub"></i>

                <i class="fi-folder-add"></i>
                <span><i class="fi-folder"></i> <i class="fi-x"></i></span>

                <i class="fi-page-add"></i>
                <i class="fi-page-delete"></i>
            </div>

            <h5> <img src="assets/img/imgs-proumo/favicon-prb.png" /> Título do projeto</h5> 
        </div>
    </header>
    
    <div id="frame_diretorios">
        <div class="folder" ng-click="toggle_pasta($event)">
            <i class="fa fa-folder{{ folder_state }}"></i> <span class="{{ folder_name }}"> Título do projeto</span>
        </div>
    </div>
</div>