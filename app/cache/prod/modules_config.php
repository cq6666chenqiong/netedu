<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    2 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    3 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    4 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    5 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    6 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    7 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    8 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    9 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    10 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    11 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    12 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    13 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    14 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
    15 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    16 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    17 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    18 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
);