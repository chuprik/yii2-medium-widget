# yii2-medium-widget

This widget is the wrapper for the [MediumEditor](https://github.com/daviferreira/medium-editor).

## Usage

### Widget

```php
echo \kotchuprik\Medium\Widget::widget([
    'model' => $model,
    'attribute' => 'attribute',
]);
```
 
### Widget with settings

```php
echo \kotchuprik\Medium\Widget::widget([
    'model' => $model,
    'attribute' => 'attribute',
    'theme' => 'bootstrap',
    'settings' => [
        'buttons' => ['bold', 'italic', 'quote'],
    ],
]);
```

### ActiveForm widget
 
```php
echo $form->field($model, 'attribute')->widget(\kotchuprik\Medium\Widget::className());
```

### ActiveForm widget with settings

```php
echo $form->field($model, 'attribute')->widget(\kotchuprik\Medium\Widget::className(), [
    'theme' => 'bootstrap',
    'settings' => [
        'buttons' => ['bold', 'italic', 'quote'],
    ],
]);
```
