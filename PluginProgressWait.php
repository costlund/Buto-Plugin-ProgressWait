<?php
class PluginProgressWait{
  public function widget_js($data){
    $widget = wfDocument::createWidget('wf/embed', 'js', array('file' => '/plugin/progress/wait/js/function.js'));
    wfDocument::renderElement(array($widget));
  }
  public function widget_progress($data){
    wfPlugin::includeonce('wf/array');
    $data = new PluginWfArray($data);
    $id = wfCrypt::getUid();
    $data->set('data/id', $id);
    $json = json_encode($data->get('data'));
    $max = $data->get('data/seconds')*10;
    $element = new PluginWfYml(__DIR__.'/element/progress.yml');
    $element->setByTag(array('script' => "var _$id = new PluginProgressWait.run($json)", 'max' => $max, 'id' => $id));
    wfDocument::renderElement($element->get());
  }
}
