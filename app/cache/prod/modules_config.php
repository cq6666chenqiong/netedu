<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    2 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    3 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    4 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    5 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    6 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    7 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    8 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    9 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    10 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    11 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    12 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    13 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    14 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    15 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    16 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    17 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    18 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
);