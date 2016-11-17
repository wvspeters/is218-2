<?php
class Nettuts {
 
    function publishNextArticle($editor) {
        $editor->setNextArticle('135523');
        $editor->publish();

        var_dump(new ReflectionClass($editor));
        var_dump($editor->getEditorName());

        $reflector = new ReflectionClass($editor);
        $editorName = $reflector->getProperty('name');
        $editorName->setAccessible(true);
        $editorName->setValue($editor, 'Mark Twain');
		var_dump($editorName->getValue($editor));
		var_dump(call_user_func(array($editor, 'getEditorName')));
        var_dump($reflector->getMethods());
    
        $methodName = 'getEditorName';
        var_dump($editor->$methodName());
    
    	$publishMethod = $reflector->getMethod('publish');
        $publishMethod->invoke($editor);


    }
 
}
?>