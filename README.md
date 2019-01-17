# Buto-Plugin-ProgressWait

Use a progress to let user wait. When progress is done a script shoud be fired.


In html head section.
```
-
  type: widget
  data:
    plugin: progress/wait
    method: js
```


Any where on page. One could use multiple progress.
```
-
  type: widget
  data:
    plugin: progress/wait
    method: progress
    data:
      seconds: 12
      script: alert('I wait 12 seconds!') 
```


