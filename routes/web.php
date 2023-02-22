<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {



$jsonA='{
    "kind": "youtube#playlistListResponse",
    "etag": "Z0KyfIL6DVRTkHSRp2nURat-kmQ",
    "nextPageToken": "CDIQAA",
    "pageInfo": {
      "totalResults": 119,
      "resultsPerPage": 50
    },
    "items": [
      {
        "kind": "youtube#playlist",
        "etag": "HQF1ZHvbENkgpVjzTbIc2rbVXik",
        "id": "PLOU2XLYxmsILr3HQpqjLAUkIPa5EaZiui",
        "snippet": {
          "publishedAt": "2023-01-09T15:43:44Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Machine Learning for Web Developers (Web ML)",
          "description": "This course is for anyone who has a basic working knowledge of JavaScript, HTML, CSS and is looking to get a practical working knowledge of Machine Learning using web technologies to bring superpowers into their web apps and sites. Maybe you are a Web Developer, Creative Technologist, or even Artist - this course is for you no matter what your professional career may be! Come take your first steps with Google\'s Web ML lead, Jason Mayes and jump on the AI / Machine Learning wave.\n\nDive into an introduction to Machine Learning with a JavaScript specific lens using TensorFlow.js. This course will start by breaking down high-level concepts you need to feel confident discussing such topics and then swiftly move to hands-on experience using the TensorFlow.js library with Machine Learning models directly in the web browser. Learn how to use pre-made models, write custom models, retrain existing ones via transfer learning,  or even reuse models from Python within the JavaScript ecosystem.\n\nFrom image recognition to spam detection in text, we cover the essentials you can then expand upon for future web apps you can build for your next client or internal project and show you how to put key concepts into action through real code. Currently, 70% of professional developers use JS in production, and this course aims to up-skill such developers, no matter what their prior background with machine learning, to be able to have a good practical understanding of the various common areas of ML and how to apply that in production.\n\nPrerequisites \nBasic working knowledge of JavaScript, HTML, CSS. You should be comfortable with variables and their types, conditionals, loops, functions, objects, DOM manipulation, promises / asynchronous coding, debugging via the browser console log output.\n\nUseful links:\n\nConnect with course creator Jason Mayes to ask questions: \nLinkedIn: https://goo.gle/3GwgeLw \nTwitter: https://goo.gle/3Xh6MT7\nDiscord: https://goo.gle/3WWVO5t \n\nUse #WebML to share your learnings and creations from this course to meet your peers on social media!\n\nSee what others have already made with Web ML → http://goo.gle/made-with-tfjs\n    \nCheck out TensorFlow on YouTube → https://goo.gle/TensorFlow-YouTube\n\nSubscribe to Google Developers → https://goo.gle/developers",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/TuYbgZ59Kpg/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/TuYbgZ59Kpg/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/TuYbgZ59Kpg/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/TuYbgZ59Kpg/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/TuYbgZ59Kpg/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Machine Learning for Web Developers (Web ML)",
            "description": "This course is for anyone who has a basic working knowledge of JavaScript, HTML, CSS and is looking to get a practical working knowledge of Machine Learning using web technologies to bring superpowers into their web apps and sites. Maybe you are a Web Developer, Creative Technologist, or even Artist - this course is for you no matter what your professional career may be! Come take your first steps with Google\'s Web ML lead, Jason Mayes and jump on the AI / Machine Learning wave.\n\nDive into an introduction to Machine Learning with a JavaScript specific lens using TensorFlow.js. This course will start by breaking down high-level concepts you need to feel confident discussing such topics and then swiftly move to hands-on experience using the TensorFlow.js library with Machine Learning models directly in the web browser. Learn how to use pre-made models, write custom models, retrain existing ones via transfer learning,  or even reuse models from Python within the JavaScript ecosystem.\n\nFrom image recognition to spam detection in text, we cover the essentials you can then expand upon for future web apps you can build for your next client or internal project and show you how to put key concepts into action through real code. Currently, 70% of professional developers use JS in production, and this course aims to up-skill such developers, no matter what their prior background with machine learning, to be able to have a good practical understanding of the various common areas of ML and how to apply that in production.\n\nPrerequisites \nBasic working knowledge of JavaScript, HTML, CSS. You should be comfortable with variables and their types, conditionals, loops, functions, objects, DOM manipulation, promises / asynchronous coding, debugging via the browser console log output.\n\nUseful links:\n\nConnect with course creator Jason Mayes to ask questions: \nLinkedIn: https://goo.gle/3GwgeLw \nTwitter: https://goo.gle/3Xh6MT7\nDiscord: https://goo.gle/3WWVO5t \n\nUse #WebML to share your learnings and creations from this course to meet your peers on social media!\n\nSee what others have already made with Web ML → http://goo.gle/made-with-tfjs\n    \nCheck out TensorFlow on YouTube → https://goo.gle/TensorFlow-YouTube\n\nSubscribe to Google Developers → https://goo.gle/developers"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 47
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILr3HQpqjLAUkIPa5EaZiui\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "hMf0fMwv0ZkRJcJVCCErXfCZuPs",
        "id": "PLOU2XLYxmsIIjHK9mEgLey-CaFcajdUBX",
        "snippet": {
          "publishedAt": "2022-09-28T16:34:07Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Founder Fridays",
          "description": "Founder Fridays is a recurring monthly event series hosted by Google Developers for the startup community. While no two Founder Fridays events are the same, you can expect to walk away with best practices from Google subject matter experts, to hear panel discussions with fellow startup founders, and gain access to Google mentors.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/c95BKysFWKY/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/c95BKysFWKY/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/c95BKysFWKY/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/c95BKysFWKY/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/c95BKysFWKY/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Founder Fridays",
            "description": "Founder Fridays is a recurring monthly event series hosted by Google Developers for the startup community. While no two Founder Fridays events are the same, you can expect to walk away with best practices from Google subject matter experts, to hear panel discussions with fellow startup founders, and gain access to Google mentors."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 21
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIIjHK9mEgLey-CaFcajdUBX\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "v8ywXR8rGOijl96AeehCOMv5Jz4",
        "id": "PLOU2XLYxmsIJ78oALT6XEKLHNFEggOI75",
        "snippet": {
          "publishedAt": "2022-09-20T11:16:02Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "GDG Inspiring Stories",
          "description": "",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/YFJZk4H_Bk4/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/YFJZk4H_Bk4/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/YFJZk4H_Bk4/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/YFJZk4H_Bk4/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/YFJZk4H_Bk4/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "GDG Inspiring Stories",
            "description": ""
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 5
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJ78oALT6XEKLHNFEggOI75\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "HYU6mVTNFjUwN-rm1Thfi-9bnIA",
        "id": "PLOU2XLYxmsIL-oBUVclcLp0zi2FW-ry4Z",
        "snippet": {
          "publishedAt": "2022-07-18T20:46:59Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "2022 Solution Challenge Demo Day",
          "description": "Check out the 2022 Solution Challenge Demo Day hosted by Google Developer Student Clubs (GDSC). You will find amazing projects from GDSC students around the world who have teamed up to build solutions that solve for one of the United Nations 17 Sustainable Development Goals. Find out the technologies behind their projects, who won, and more in this playlist!",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/PHpveYiS0OQ/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/PHpveYiS0OQ/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/PHpveYiS0OQ/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/PHpveYiS0OQ/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/PHpveYiS0OQ/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "2022 Solution Challenge Demo Day",
            "description": "Check out the 2022 Solution Challenge Demo Day hosted by Google Developer Student Clubs (GDSC). You will find amazing projects from GDSC students around the world who have teamed up to build solutions that solve for one of the United Nations 17 Sustainable Development Goals. Find out the technologies behind their projects, who won, and more in this playlist!"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 13
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIL-oBUVclcLp0zi2FW-ry4Z\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "lwEyh5RaOohVMYVYuRmb8X_AfBk",
        "id": "PLOU2XLYxmsIK6HyKuHTRDCMxkOPFB2vfp",
        "snippet": {
          "publishedAt": "2022-04-18T20:49:08Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "AI for Anyone",
          "description": "AI for Anyone is a series that breaks down Artificial Intelligence so you can understand what it is, how it works, and what applications it has today and in the future.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/XJ476O86hbU/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/XJ476O86hbU/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/XJ476O86hbU/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/XJ476O86hbU/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/XJ476O86hbU/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "AI for Anyone",
            "description": "AI for Anyone is a series that breaks down Artificial Intelligence so you can understand what it is, how it works, and what applications it has today and in the future."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 5
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIK6HyKuHTRDCMxkOPFB2vfp\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "CAFBIIUNdRJeF4mSyOplyJmz1H4",
        "id": "PLOU2XLYxmsILw2VmhxUWyd_imCrJef_iz",
        "snippet": {
          "publishedAt": "2022-04-04T23:17:37Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2022 Sessions",
          "description": "At Google I/O 2022, developers and enthusiasts from around the world came together online and in person to celebrate the latest updates to Google products and services. Hear what\'s new in Android, Firebase, Flutter, AI/ML, Google Cloud, and so much more and dive into technical sessions and workshops lead by industry experts.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2022 Sessions",
            "description": "At Google I/O 2022, developers and enthusiasts from around the world came together online and in person to celebrate the latest updates to Google products and services. Hear what\'s new in Android, Firebase, Flutter, AI/ML, Google Cloud, and so much more and dive into technical sessions and workshops lead by industry experts."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 138
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILw2VmhxUWyd_imCrJef_iz\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "rXn7g8HP9wJ-1bGbftegUJrFiqc",
        "id": "PLOU2XLYxmsIKp3tmkGM6NNkP28ZetfGDX",
        "snippet": {
          "publishedAt": "2022-04-04T23:00:02Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2022 Keynotes",
          "description": "Every Keynote from Google I/O 2022.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/nP-nMZpLM1A/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2022 Keynotes",
            "description": "Every Keynote from Google I/O 2022."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 14
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKp3tmkGM6NNkP28ZetfGDX\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "rqFmYeYHlDST05igJVP-vywD4-I",
        "id": "PLOU2XLYxmsIJXeWCXZOAqbBMWq2JYCI0f",
        "snippet": {
          "publishedAt": "2022-04-04T22:59:57Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Assistant at Google I/O 2022",
          "description": "During Google I/O 2022, developers and enthusiasts came together to share the latest in Google Assistant and IoT, exploring new voice features and updates in integration across devices, including phones, large screens, Android Auto, and WearOS. Watch all Google Assistant content here.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/6vXZcg9g_Mo/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/6vXZcg9g_Mo/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/6vXZcg9g_Mo/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/6vXZcg9g_Mo/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/6vXZcg9g_Mo/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Assistant at Google I/O 2022",
            "description": "During Google I/O 2022, developers and enthusiasts came together to share the latest in Google Assistant and IoT, exploring new voice features and updates in integration across devices, including phones, large screens, Android Auto, and WearOS. Watch all Google Assistant content here."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 4
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJXeWCXZOAqbBMWq2JYCI0f\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "36KIijvuT8HcDWtDq5MWEWodzdc",
        "id": "PLOU2XLYxmsIJk4cldTzDX8QbUh80kSyWM",
        "snippet": {
          "publishedAt": "2022-04-04T22:56:17Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2022 Technical Sessions",
          "description": "Every technical session from Google I/O 2022.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/2gTCghy-dU4/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/2gTCghy-dU4/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/2gTCghy-dU4/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/2gTCghy-dU4/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/2gTCghy-dU4/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2022 Technical Sessions",
            "description": "Every technical session from Google I/O 2022."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 107
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJk4cldTzDX8QbUh80kSyWM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "DeJ0-1YLl0p_LGIXVovuINRSE9g",
        "id": "PLOU2XLYxmsIJyFhZ-tuzioCRpDumYK9Bi",
        "snippet": {
          "publishedAt": "2022-04-04T22:49:05Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2022 Workshops",
          "description": "Every workshop from Google I/O 2022.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/21Cf-7Y-s2Q/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/21Cf-7Y-s2Q/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/21Cf-7Y-s2Q/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/21Cf-7Y-s2Q/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/21Cf-7Y-s2Q/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2022 Workshops",
            "description": "Every workshop from Google I/O 2022."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 24
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJyFhZ-tuzioCRpDumYK9Bi\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "lpI7KgXzWc9kCD-Dd_PA9797EZk",
        "id": "PLOU2XLYxmsIKNUl9LeC0rq4mQ68Xc3nVF",
        "snippet": {
          "publishedAt": "2022-04-04T22:46:45Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Accessibility at Google I/O 2022",
          "description": "Discover all of Google\'s accessibility innovations announced at Google I/O 2022, including possibilities for Braille displays, photo summarization, and isolating important sounds from background chatter. Watch all Accessibility content here.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/Z_Ve29skMr8/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/Z_Ve29skMr8/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/Z_Ve29skMr8/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/Z_Ve29skMr8/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/Z_Ve29skMr8/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Accessibility at Google I/O 2022",
            "description": "Discover all of Google\'s accessibility innovations announced at Google I/O 2022, including possibilities for Braille displays, photo summarization, and isolating important sounds from background chatter. Watch all Accessibility content here."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 8
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKNUl9LeC0rq4mQ68Xc3nVF\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "2kORIjWYP0pdSImG7AoU2pwoksM",
        "id": "PLOU2XLYxmsILUedETM6MMDhLEyym6ZUya",
        "snippet": {
          "publishedAt": "2022-04-04T22:42:18Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Augmented Reality at Google I/O 2022",
          "description": "Discover all the Augmented Reality innovations announced at Google I/O 2022, including information on scaling, API improvements, and more. Watch all AR content here.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/PM5rl4z9mto/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/PM5rl4z9mto/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/PM5rl4z9mto/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/PM5rl4z9mto/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/PM5rl4z9mto/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Augmented Reality at Google I/O 2022",
            "description": "Discover all the Augmented Reality innovations announced at Google I/O 2022, including information on scaling, API improvements, and more. Watch all AR content here."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 4
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILUedETM6MMDhLEyym6ZUya\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "7red3wawzTsPhu462s66o_qEMgY",
        "id": "PLOU2XLYxmsIJV1-d4nT1nASp_3saSourr",
        "snippet": {
          "publishedAt": "2022-04-04T22:12:40Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Payments at Google I/O 2022",
          "description": "Explore everything Payments at Google I/O 2022, including how the Google Pay team is making payments more secure and frictionless, enabling networks, issuers, and merchants of all sizes in getting the best in class checkout experience. Watch all Payments content here.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/eF4OmlV7ARs/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/eF4OmlV7ARs/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/eF4OmlV7ARs/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/eF4OmlV7ARs/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/eF4OmlV7ARs/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Payments at Google I/O 2022",
            "description": "Explore everything Payments at Google I/O 2022, including how the Google Pay team is making payments more secure and frictionless, enabling networks, issuers, and merchants of all sizes in getting the best in class checkout experience. Watch all Payments content here."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 6
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJV1-d4nT1nASp_3saSourr\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "ls1sX54AC-v9HBOwuxZIMxGclNA",
        "id": "PLOU2XLYxmsIJywLo-PAH9Dia_7Ix5Xik_",
        "snippet": {
          "publishedAt": "2022-04-04T22:09:19Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Smart Home at Google I/O 2022",
          "description": "Discover all Smart Home innovations at Google I/O 2022. Take a deep dive into the Google Home Device SDK — the fastest way to build Matter devices that work seamlessly with Google Home and other Matter ecosystems. Watch all Smart Home content here.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/z52p5fT1ihA/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/z52p5fT1ihA/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/z52p5fT1ihA/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/z52p5fT1ihA/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/z52p5fT1ihA/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Smart Home at Google I/O 2022",
            "description": "Discover all Smart Home innovations at Google I/O 2022. Take a deep dive into the Google Home Device SDK — the fastest way to build Matter devices that work seamlessly with Google Home and other Matter ecosystems. Watch all Smart Home content here."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 5
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJywLo-PAH9Dia_7Ix5Xik_\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "6xlJ4e6MSUxnOCEOGCsNOkIvECk",
        "id": "PLOU2XLYxmsILxA2bQ2zNylxpjso-CCKds",
        "snippet": {
          "publishedAt": "2022-04-04T22:04:13Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Developers at I/O 2022 playlist",
          "description": "Experts from around the globe gathered together at Google I/O 2022 to share the latest in Google developer products and platforms. Learn how Google is making payments more secure and frictionless, what’s new in ARCore, Google Assistant, the findings from the Africa Developer Ecosystem report, and more.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/qBkyU1TJKDg/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/qBkyU1TJKDg/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/qBkyU1TJKDg/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/qBkyU1TJKDg/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/qBkyU1TJKDg/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Developers at I/O 2022 playlist",
            "description": "Experts from around the globe gathered together at Google I/O 2022 to share the latest in Google developer products and platforms. Learn how Google is making payments more secure and frictionless, what’s new in ARCore, Google Assistant, the findings from the Africa Developer Ecosystem report, and more."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 22
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILxA2bQ2zNylxpjso-CCKds\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "8s0I09PuC6n1Ee7EelTEIcR-OS4",
        "id": "PLOU2XLYxmsIJutLlv24ZvhYz84ITfQOai",
        "snippet": {
          "publishedAt": "2022-03-24T23:51:05Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Developers Top 10 (updated weekly!)",
          "description": "Check out our top 10 videos from last week. Come back weekly for updates to Google Developer’s products, services, and programs!",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/PAOAjOR6K_Q/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/PAOAjOR6K_Q/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/PAOAjOR6K_Q/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/PAOAjOR6K_Q/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/PAOAjOR6K_Q/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Developers Top 10 (updated weekly!)",
            "description": "Check out our top 10 videos from last week. Come back weekly for updates to Google Developer’s products, services, and programs!"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 10
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJutLlv24ZvhYz84ITfQOai\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "1lccVXVaNWTHa5FaWDa6b8NEIjA",
        "id": "PLOU2XLYxmsILpEjOkRY0C7Bl6t6cUFFxf",
        "snippet": {
          "publishedAt": "2022-02-28T17:44:20Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Get ready for Google for Games Developer Summit 2022",
          "description": "Get ready for Google for Games Developer Summit 2022 and catch up on the latest updates and announcements for game developers from the Android Game Development Kit to the Play Integrity API, and more.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Get ready for Google for Games Developer Summit 2022",
            "description": "Get ready for Google for Games Developer Summit 2022 and catch up on the latest updates and announcements for game developers from the Android Game Development Kit to the Play Integrity API, and more."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 10
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILpEjOkRY0C7Bl6t6cUFFxf\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "wbKmqTzR_xJUAO8wFR7iOaNgSUo",
        "id": "PLOU2XLYxmsIKYv7cLeFHTnd-CUEo1v3n_",
        "snippet": {
          "publishedAt": "2022-02-23T00:53:54Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Mobile Track (Google for Games Developer Summit)",
          "description": "Hear updates and announcements from Android, Google Play, Firebase, and Ads teams for mobile developers, publishers, marketers, and more made during the 2022 Google For Games Developer Summit.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Mobile Track (Google for Games Developer Summit)",
            "description": "Hear updates and announcements from Android, Google Play, Firebase, and Ads teams for mobile developers, publishers, marketers, and more made during the 2022 Google For Games Developer Summit."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 18
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKYv7cLeFHTnd-CUEo1v3n_\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "lEjTTBRJIZclDgdWlryeyM4umZs",
        "id": "PLOU2XLYxmsIIUM4L1VKBw488wxj6ZZW81",
        "snippet": {
          "publishedAt": "2022-02-23T00:48:34Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Cloud Games and Infrastructure Track (Google for Games Developer Summit)",
          "description": "Watch insights from the Google Cloud and Stadia teams during the 2022 Google for Games Developer Summit, and learn how to scale your game to billions of players.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/1oc75GQFKvg/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Cloud Games and Infrastructure Track (Google for Games Developer Summit)",
            "description": "Watch insights from the Google Cloud and Stadia teams during the 2022 Google for Games Developer Summit, and learn how to scale your game to billions of players."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 13
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIIUM4L1VKBw488wxj6ZZW81\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "SUv39zulMY0xa64QsJjUZU7CADQ",
        "id": "PLOU2XLYxmsILAHlMb1od40N3J-locJ6E9",
        "snippet": {
          "publishedAt": "2022-02-22T23:03:33Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google for Games Developer Summit Sessions 2022",
          "description": "Check out the new solutions for game devs that make it easier to build high quality games and reach growing audiences around the world, announced during the 2022 Google for Games Developer Summit. \nHear from across our Android, Google Play, Ads, Cloud, and Stadia teams for deep dives into best practices for creating great mobile games, connecting with players, scaling your business in the cloud, and more.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/yrHsalqDbIM/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/yrHsalqDbIM/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/yrHsalqDbIM/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/yrHsalqDbIM/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/yrHsalqDbIM/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google for Games Developer Summit Sessions 2022",
            "description": "Check out the new solutions for game devs that make it easier to build high quality games and reach growing audiences around the world, announced during the 2022 Google for Games Developer Summit. \nHear from across our Android, Google Play, Ads, Cloud, and Stadia teams for deep dives into best practices for creating great mobile games, connecting with players, scaling your business in the cloud, and more."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 25
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILAHlMb1od40N3J-locJ6E9\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "5wAaOIJpgPq-FIeOsQTayIV1xKk",
        "id": "PLOU2XLYxmsIKQPrmzi3ZXep2rlMnmQwjQ",
        "snippet": {
          "publishedAt": "2021-12-23T21:22:12Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Matter Developer Tools",
          "description": "Learn about the many tools available to help you develop, test, and deploy a smart device that’s compatible with Matter.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/johmkfMVbjQ/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/johmkfMVbjQ/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/johmkfMVbjQ/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/johmkfMVbjQ/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/johmkfMVbjQ/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Matter Developer Tools",
            "description": "Learn about the many tools available to help you develop, test, and deploy a smart device that’s compatible with Matter."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 5
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKQPrmzi3ZXep2rlMnmQwjQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "flgerVTz8WOo_GPSy_jkcHfUjdg",
        "id": "PLOU2XLYxmsIKaZQKCYKIDWgRa1UelYOZn",
        "snippet": {
          "publishedAt": "2021-12-21T22:29:47Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Developer Home Tools",
          "description": "These tips and tools will help you develop and test your integrations to ensure your smart home integration is of quality and provides users with fast, reliable, and easy-to-use smart devices.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/WgC8WpnedKI/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/WgC8WpnedKI/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/WgC8WpnedKI/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/WgC8WpnedKI/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/WgC8WpnedKI/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Developer Home Tools",
            "description": "These tips and tools will help you develop and test your integrations to ensure your smart home integration is of quality and provides users with fast, reliable, and easy-to-use smart devices."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 4
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKaZQKCYKIDWgRa1UelYOZn\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "6EjmvSRObgTjpF8CI_N161QuY4A",
        "id": "PLOU2XLYxmsIKA-bRJ4jQO2wD-wWiD1O96",
        "snippet": {
          "publishedAt": "2021-12-21T19:14:03Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Home Debugging Tools",
          "description": "Learn about the many tools available to debug and monitor for Smart Home Actions.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/uzdKJ9bUHHI/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/uzdKJ9bUHHI/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/uzdKJ9bUHHI/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/uzdKJ9bUHHI/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/uzdKJ9bUHHI/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Home Debugging Tools",
            "description": "Learn about the many tools available to debug and monitor for Smart Home Actions."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 3
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKA-bRJ4jQO2wD-wWiD1O96\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "CrRFmRxrfVe7Na2S6jfMKHsgM94",
        "id": "PLOU2XLYxmsILz5a-LUaLFkkkbpv6sVM0g",
        "snippet": {
          "publishedAt": "2021-12-16T23:51:33Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Mobile Development for Matter",
          "description": "Get started with the concepts and fundamentals for mobile development for Matter, a connectivity protocol designed to make it easier for developers to build reliable, cross-platform compatible smart devices.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/O2szt3jALyM/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/O2szt3jALyM/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/O2szt3jALyM/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/O2szt3jALyM/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/O2szt3jALyM/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Mobile Development for Matter",
            "description": "Get started with the concepts and fundamentals for mobile development for Matter, a connectivity protocol designed to make it easier for developers to build reliable, cross-platform compatible smart devices."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 4
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILz5a-LUaLFkkkbpv6sVM0g\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "-IumUXObRvE9Imm6oBQhmEcvL10",
        "id": "PLOU2XLYxmsIKeEUGxcA2cKjaJ925FvQnh",
        "snippet": {
          "publishedAt": "2021-12-06T17:52:59Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "DevFest 2021",
          "description": "DevFest 2021 inspires local developers to learn and connect as a community by exploring how to use Google technology to accelerate economic impact. \n\nDevelopers from all around the world join their local Google Developer Group chapters for their largest annual event. \n\nThese videos are intended to start a conversation about developers, community, and tech for good at DevFest 2021",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/hLRMbJWAvDQ/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/hLRMbJWAvDQ/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/hLRMbJWAvDQ/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/hLRMbJWAvDQ/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/hLRMbJWAvDQ/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "DevFest 2021",
            "description": "DevFest 2021 inspires local developers to learn and connect as a community by exploring how to use Google technology to accelerate economic impact. \n\nDevelopers from all around the world join their local Google Developer Group chapters for their largest annual event. \n\nThese videos are intended to start a conversation about developers, community, and tech for good at DevFest 2021"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 6
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKeEUGxcA2cKjaJ925FvQnh\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "-QHB_Gb5K7DjegPIVvWyPTdo_ac",
        "id": "PLOU2XLYxmsIJ590o0oAKUBJTrhAp6A2eJ",
        "snippet": {
          "publishedAt": "2021-12-03T17:11:42Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Dev Library Contributor Interviews",
          "description": "Google Dev Library is a curated platform for technical content written or built using Google technologies like Android, Google Cloud, TensorFlow, Flutter and more. Watch Sebastian Trzcinski-Clément, senior program manager at Google interview developers who have contributed their open source projects and blogs to find out how you can leverage their content to Develop with Google. Learn more at https://devlibrary.withgoogle.com/",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/XrIuuJ6YFzY/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/XrIuuJ6YFzY/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/XrIuuJ6YFzY/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/XrIuuJ6YFzY/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/XrIuuJ6YFzY/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Dev Library Contributor Interviews",
            "description": "Google Dev Library is a curated platform for technical content written or built using Google technologies like Android, Google Cloud, TensorFlow, Flutter and more. Watch Sebastian Trzcinski-Clément, senior program manager at Google interview developers who have contributed their open source projects and blogs to find out how you can leverage their content to Develop with Google. Learn more at https://devlibrary.withgoogle.com/"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 19
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJ590o0oAKUBJTrhAp6A2eJ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "row47IFrie_vXhqr8P02W-D18Sg",
        "id": "PLOU2XLYxmsIIOzvDusmPARZBreKLTOT3_",
        "snippet": {
          "publishedAt": "2021-11-09T19:28:35Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Assistant on Air (GDE sessions)",
          "description": "A peek behind the curtain with those who build for Google Assistant. In this session, we have conversations about our guest’s insights and first-hand learnings from their experiences building voice actions. Each episode is focused on a different topic or theme like ways to build a voice application, how to build for smart home, reaching users, connecting with the community, conversational design, and so much more.\n\nJoin our Reddit community to keep up to date and share information with other developers → https://goo.gle/assistant-reddit. \n\nFind us on Twitter and let us know what your building with #AoGDevs → https://goo.gle/assistant-twitter \n\nFor more insights and information visit our website → https://goo.gle/assistant-docs\n\nSubscribe to Google Developers → https://goo.gle/developers",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/q7Tkzmvel5k/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/q7Tkzmvel5k/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/q7Tkzmvel5k/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/q7Tkzmvel5k/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/q7Tkzmvel5k/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Assistant on Air (GDE sessions)",
            "description": "A peek behind the curtain with those who build for Google Assistant. In this session, we have conversations about our guest’s insights and first-hand learnings from their experiences building voice actions. Each episode is focused on a different topic or theme like ways to build a voice application, how to build for smart home, reaching users, connecting with the community, conversational design, and so much more.\n\nJoin our Reddit community to keep up to date and share information with other developers → https://goo.gle/assistant-reddit. \n\nFind us on Twitter and let us know what your building with #AoGDevs → https://goo.gle/assistant-twitter \n\nFor more insights and information visit our website → https://goo.gle/assistant-docs\n\nSubscribe to Google Developers → https://goo.gle/developers"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 12
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIIOzvDusmPARZBreKLTOT3_\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "1pM_kmiYanh1gjMIzznZGYRJKx4",
        "id": "PLOU2XLYxmsIJziKF4hb1GDmQM5WzjKCQP",
        "snippet": {
          "publishedAt": "2021-10-28T19:04:24Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Kick Start",
          "description": "Kick Start is designed for those newer to coding competitions to practice and improve their skills. Join a community of more than 400,000 developers to help grow your programming skills, solve problems in creative ways, network, and have fun!\n\nRegistration is now open!",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/cMHY4UouGCk/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/cMHY4UouGCk/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/cMHY4UouGCk/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/cMHY4UouGCk/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/cMHY4UouGCk/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Kick Start",
            "description": "Kick Start is designed for those newer to coding competitions to practice and improve their skills. Join a community of more than 400,000 developers to help grow your programming skills, solve problems in creative ways, network, and have fun!\n\nRegistration is now open!"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 10
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJziKF4hb1GDmQM5WzjKCQP\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "H8F4VAStRn1M3MLgfNqu86qly4g",
        "id": "PLOU2XLYxmsILfLmj3QQlV6QrPRvoJ7vCi",
        "snippet": {
          "publishedAt": "2021-10-28T19:04:11Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Hash Code",
          "description": "Hash Code is a team based coding competition designed for developers to work together and solve algorithmic problems designed by Google engineers. Join a community of more than 400,000 developers to help grow your programming skills, solve problems in creative ways, network, and have fun!\n\nRegistration is now open!",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/QDIa9PBmX50/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/QDIa9PBmX50/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/QDIa9PBmX50/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/QDIa9PBmX50/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/QDIa9PBmX50/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Hash Code",
            "description": "Hash Code is a team based coding competition designed for developers to work together and solve algorithmic problems designed by Google engineers. Join a community of more than 400,000 developers to help grow your programming skills, solve problems in creative ways, network, and have fun!\n\nRegistration is now open!"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 9
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILfLmj3QQlV6QrPRvoJ7vCi\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "0OUpDnsbAq0fqnQLWUlv0Ikl6uU",
        "id": "PLOU2XLYxmsIKRSINXD5hR6dvWaACAGjD3",
        "snippet": {
          "publishedAt": "2021-10-28T19:03:52Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Code Jam",
          "description": "Code Jam is Google\'s longest running global coding competition. Participants work through multiple rounds of algorithmic puzzles to earn a spot at the World Finals and a chance to win the championship title and grand prize of $15,000 USD! Join a community of more than 400,000 developers to help grow your programming skills, solve problems in creative ways, network, and have fun!\n\n\nRegistration is now open!",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/ccIxnSZ9SKE/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/ccIxnSZ9SKE/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/ccIxnSZ9SKE/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/ccIxnSZ9SKE/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/ccIxnSZ9SKE/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Code Jam",
            "description": "Code Jam is Google\'s longest running global coding competition. Participants work through multiple rounds of algorithmic puzzles to earn a spot at the World Finals and a chance to win the championship title and grand prize of $15,000 USD! Join a community of more than 400,000 developers to help grow your programming skills, solve problems in creative ways, network, and have fun!\n\n\nRegistration is now open!"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 12
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKRSINXD5hR6dvWaACAGjD3\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "bJ_g6dbOnDToa7i7qcx7Re3v0YE",
        "id": "PLOU2XLYxmsILEbh0ykPF6xNbWNanY8LlU",
        "snippet": {
          "publishedAt": "2021-09-24T21:40:45Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Smart Home Summit 2021",
          "description": "Discover why Google is the best platform for smart home developers to build, innovate, and grow!\n\nThis playlist covers content from our recent Smart Home Developer Summit, including previews of our new Google Home Developer Center, embedded and mobile SDKs, and upcoming tools and features to build your next devices and apps using Matter and Thread.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/3IKmgnS6FDg/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/3IKmgnS6FDg/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/3IKmgnS6FDg/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/3IKmgnS6FDg/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/3IKmgnS6FDg/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Smart Home Summit 2021",
            "description": "Discover why Google is the best platform for smart home developers to build, innovate, and grow!\n\nThis playlist covers content from our recent Smart Home Developer Summit, including previews of our new Google Home Developer Center, embedded and mobile SDKs, and upcoming tools and features to build your next devices and apps using Matter and Thread."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 8
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILEbh0ykPF6xNbWNanY8LlU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "N6c_V8H6yHFiSHQxk9CA_hGIDjY",
        "id": "PLOU2XLYxmsIK3Mq1itovZMQkKEkBYamG0",
        "snippet": {
          "publishedAt": "2021-08-17T16:09:45Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "2021 Solution Challenge Demo Day",
          "description": "Join us for the 2021 Solution Challenge Demo Day hosted by Google Developer Student Clubs. The top 10 finalist teams will demo their solutions live while judges pick the top 3 grand winners! With months in the making, these students have come together with their local Google Developer Student Club teammates at their universities to create some truly inspiring ideas to support the United Nations 17 Sustainable Development Goals.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/BC5OOJiVsQw/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/BC5OOJiVsQw/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/BC5OOJiVsQw/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/BC5OOJiVsQw/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/BC5OOJiVsQw/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "2021 Solution Challenge Demo Day",
            "description": "Join us for the 2021 Solution Challenge Demo Day hosted by Google Developer Student Clubs. The top 10 finalist teams will demo their solutions live while judges pick the top 3 grand winners! With months in the making, these students have come together with their local Google Developer Student Club teammates at their universities to create some truly inspiring ideas to support the United Nations 17 Sustainable Development Goals."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 17
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIK3Mq1itovZMQkKEkBYamG0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "mARknZJ2ieur9zXprvi9N2i_G_o",
        "id": "PLOU2XLYxmsILX59ssQHxpWgc8fnrxImXR",
        "snippet": {
          "publishedAt": "2021-08-13T14:22:11Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Payments DevBytes",
          "description": "Check out several step-by-step tutorials of how to integrate Google Pay in React and Angular, with host Soc Sieng.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Payments DevBytes",
            "description": "Check out several step-by-step tutorials of how to integrate Google Pay in React and Angular, with host Soc Sieng."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 3
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILX59ssQHxpWgc8fnrxImXR\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "FzFk1wpQ4eX74hgtwcLenFITrYc",
        "id": "PLOU2XLYxmsILxVVNgqSWS6Rp_r6dKYszs",
        "snippet": {
          "publishedAt": "2021-08-04T21:49:58Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "dotnew",
          "description": ".new is a domain extension that helps businesses build memorable shortcuts to their products. In this collection of case studies, Google Registry highlights teams that started using .new early on and share their stories of how their customers have engaged with the shortcuts they created.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/Wmb8ci1gPlY/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/Wmb8ci1gPlY/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/Wmb8ci1gPlY/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/Wmb8ci1gPlY/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/Wmb8ci1gPlY/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "dotnew",
            "description": ".new is a domain extension that helps businesses build memorable shortcuts to their products. In this collection of case studies, Google Registry highlights teams that started using .new early on and share their stories of how their customers have engaged with the shortcuts they created."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 3
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILxVVNgqSWS6Rp_r6dKYszs\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "WCet9i7_2kLlxAJe-U7SjcybIiM",
        "id": "PLOU2XLYxmsILLef6r6RYTS2GzapxeZRec",
        "snippet": {
          "publishedAt": "2021-06-15T21:54:51Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Developers at Google for Games Developer Summit",
          "description": "At the 2021 Google for Games Developer Summit, we introduce the new HTML5 gaming platform, provide insight into four key factors developers should know when connecting with gaming creators, and share how we provide value to our Stadia partners.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Developers at Google for Games Developer Summit",
            "description": "At the 2021 Google for Games Developer Summit, we introduce the new HTML5 gaming platform, provide insight into four key factors developers should know when connecting with gaming creators, and share how we provide value to our Stadia partners."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 6
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILLef6r6RYTS2GzapxeZRec\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "TY_qkLSUSUdsBuLXa68wsP0fPzI",
        "id": "PLOU2XLYxmsIJq-gUg6ouMqUdRXa3QGBbT",
        "snippet": {
          "publishedAt": "2021-06-15T21:53:03Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google for Games Developer Summit Sessions 2021",
          "description": "With a surge of new gamers and an increase in time spent playing games in the last year, it’s more important than ever to delight and engage players. We’re here to help you build high quality experiences and take your games to the next level.\n\nWatch the 2021 Google for Games Developer Summit to see new products and solutions across Google. Catch deep dives full of best practices to help you continue creating great games, connecting with players, and scaling your business.\n\nSubscribe to Google Developers → https://goo.gle/developers",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google for Games Developer Summit Sessions 2021",
            "description": "With a surge of new gamers and an increase in time spent playing games in the last year, it’s more important than ever to delight and engage players. We’re here to help you build high quality experiences and take your games to the next level.\n\nWatch the 2021 Google for Games Developer Summit to see new products and solutions across Google. Catch deep dives full of best practices to help you continue creating great games, connecting with players, and scaling your business.\n\nSubscribe to Google Developers → https://goo.gle/developers"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 34
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJq-gUg6ouMqUdRXa3QGBbT\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "fCuKuKfhQnJeUXVajxKAnuq4vNQ",
        "id": "PLOU2XLYxmsIL2NodjUg39u7KWN6xQua8q",
        "snippet": {
          "publishedAt": "2021-06-15T21:52:40Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Next level infrastructure",
          "description": "Welcome to the Next Level Infrastructure Keynote, where we take a look at engaging new and diverse audiences with Machine Learning, Google Cloud native databases, and storage for games, as well as the top 5 Google Cloud announcements from Google for Games Developers Summit.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/Nu2P7Gaxaf4/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/Nu2P7Gaxaf4/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/Nu2P7Gaxaf4/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/Nu2P7Gaxaf4/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/Nu2P7Gaxaf4/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Next level infrastructure",
            "description": "Welcome to the Next Level Infrastructure Keynote, where we take a look at engaging new and diverse audiences with Machine Learning, Google Cloud native databases, and storage for games, as well as the top 5 Google Cloud announcements from Google for Games Developers Summit."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 7
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIL2NodjUg39u7KWN6xQua8q\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "O8LfjWRGyPH21MX_jFaW0qxJHWs",
        "id": "PLOU2XLYxmsIIb7hcy-YBGDlCxq8LyRdVA",
        "snippet": {
          "publishedAt": "2021-06-15T21:52:32Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Next level platforms",
          "description": "Learn how the Stadia team is working to make it easier to bring games to platforms. This playlist includes info on mobile gaming, HTML5 gaming, cloud-native tooling, automated certification processes, and third-party engine improvements.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/I0oNK-XHp0I/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Next level platforms",
            "description": "Learn how the Stadia team is working to make it easier to bring games to platforms. This playlist includes info on mobile gaming, HTML5 gaming, cloud-native tooling, automated certification processes, and third-party engine improvements."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 7
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIIb7hcy-YBGDlCxq8LyRdVA\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "F4q0WS4mIS3RWH3Y2qI40m31ds8",
        "id": "PLOU2XLYxmsIJKFlFFE5OD0b1oMu7iUoO0",
        "snippet": {
          "publishedAt": "2021-06-15T21:52:24Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Next level growth",
          "description": "Deep dive into improving your store listing quality, enhancing your game with UX, how to plan and optimize your game for success on Google Play, and more with the Next Level Growth playlist at Google for Games Summit 2021!",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/xxQQ0ftKvss/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/xxQQ0ftKvss/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/xxQQ0ftKvss/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/xxQQ0ftKvss/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/xxQQ0ftKvss/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Next level growth",
            "description": "Deep dive into improving your store listing quality, enhancing your game with UX, how to plan and optimize your game for success on Google Play, and more with the Next Level Growth playlist at Google for Games Summit 2021!"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 9
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJKFlFFE5OD0b1oMu7iUoO0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "BuSLY3OHgDcfkh35hp8MSw2tX38",
        "id": "PLOU2XLYxmsIKkUZ_qDyBY9El8L1Pvg588",
        "snippet": {
          "publishedAt": "2021-06-15T21:52:14Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Next level mobile",
          "description": "Learn about how we’re making Android game development easier, growing the ecosystem of Android games running on more screens, and how to improve your go-to-market success on Google Play.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/e9JCRsLjDr4/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Next level mobile",
            "description": "Learn about how we’re making Android game development easier, growing the ecosystem of Android games running on more screens, and how to improve your go-to-market success on Google Play."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 12
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKkUZ_qDyBY9El8L1Pvg588\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "Wig9wtzE9CxVYFdrgly-METHeYw",
        "id": "PLOU2XLYxmsIKBipusXYzM3DXKZaylreO2",
        "snippet": {
          "publishedAt": "2021-05-20T23:53:42Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Pay at Google I/O 2021",
          "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google Pay, dive deeper into all things Google, and share feedback and skills through workshops, AMAs, and demos. Watch all the Google Pay Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/j9NBCig20Tw/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/j9NBCig20Tw/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/j9NBCig20Tw/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/j9NBCig20Tw/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/j9NBCig20Tw/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Pay at Google I/O 2021",
            "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google Pay, dive deeper into all things Google, and share feedback and skills through workshops, AMAs, and demos. Watch all the Google Pay Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 8
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKBipusXYzM3DXKZaylreO2\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "7pg95jhlXXGd0JqwB9qAqjws-Qs",
        "id": "PLOU2XLYxmsIKdbaIHjCAVn-ENeukrsLLT",
        "snippet": {
          "publishedAt": "2021-04-26T19:48:05Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Assistant at Google I/O 2021",
          "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google Assistant, dive deeper into all things Google, and share feedback and skills through workshops, AMAs, and demos. Watch all the Google Assistant Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/O2gCx_iX2vQ/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/O2gCx_iX2vQ/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/O2gCx_iX2vQ/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/O2gCx_iX2vQ/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/O2gCx_iX2vQ/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Assistant at Google I/O 2021",
            "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google Assistant, dive deeper into all things Google, and share feedback and skills through workshops, AMAs, and demos. Watch all the Google Assistant Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 13
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKdbaIHjCAVn-ENeukrsLLT\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "VZKCzKEpH5gKKo5oqj71mKecSMo",
        "id": "PLOU2XLYxmsIKToc_JFCyRJN9eyrxbS0FG",
        "snippet": {
          "publishedAt": "2021-04-09T16:34:46Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2021  Workshops",
          "description": "Every workshop from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/Q7xudRfN188/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/Q7xudRfN188/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/Q7xudRfN188/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/Q7xudRfN188/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/Q7xudRfN188/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2021  Workshops",
            "description": "Every workshop from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 26
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKToc_JFCyRJN9eyrxbS0FG\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "kkG3YdHi7EqER6i2K-Ltvx31RJg",
        "id": "PLOU2XLYxmsIInpx6VfDxsRQS52JRYxbgO",
        "snippet": {
          "publishedAt": "2021-04-09T16:33:44Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2021 Technical Sessions",
          "description": "Every Session from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2021 Technical Sessions",
            "description": "Every Session from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 98
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIInpx6VfDxsRQS52JRYxbgO\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "X3ydUtDezlxmUkL7FW44_aNuWC4",
        "id": "PLOU2XLYxmsIIIRNHgsZPcSQJJ--2_MQvR",
        "snippet": {
          "publishedAt": "2021-04-09T16:33:04Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2021 Keynotes",
          "description": "Every Keynote from Google I/O 2021. \n\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2021 Keynotes",
            "description": "Every Keynote from Google I/O 2021. \n\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 14
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIIIRNHgsZPcSQJJ--2_MQvR\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "3p6GXPeymKpixV03R_bgH4t2JMY",
        "id": "PLOU2XLYxmsILU62c5HdPY5EQnUATTk04_",
        "snippet": {
          "publishedAt": "2021-04-09T16:32:32Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2021 Demos",
          "description": "Every demo from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/jIBNhxyciLQ/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/jIBNhxyciLQ/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/jIBNhxyciLQ/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/jIBNhxyciLQ/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/jIBNhxyciLQ/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2021 Demos",
            "description": "Every demo from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 18
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILU62c5HdPY5EQnUATTk04_\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "krt253Ouk6ZJyazhYlb_xnHuZfA",
        "id": "PLOU2XLYxmsIJwWXScAwCG5vSEQbwQsC0F",
        "snippet": {
          "publishedAt": "2021-04-09T16:30:38Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "All Google I/O 2021 Q&As",
          "description": "Every Q&A from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/ab7-Z8glx7w/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/ab7-Z8glx7w/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/ab7-Z8glx7w/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/ab7-Z8glx7w/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/ab7-Z8glx7w/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "All Google I/O 2021 Q&As",
            "description": "Every Q&A from Google I/O 2021. \n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 26
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJwWXScAwCG5vSEQbwQsC0F\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "lSGGkfLDX86pLWaoS3nAOcy05yo",
        "id": "PLOU2XLYxmsILkNW9d1Jw9rHLAEORuuS-9",
        "snippet": {
          "publishedAt": "2021-03-31T16:54:44Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Pay Developers",
          "description": "Online payment should be seamless for users and simple to implement for developers. Google Pay can help improve your checkout experience and increase conversions in-app and web. Learn how to integrate Google Pay into your app.",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/k1KH76v9Jrs/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Pay Developers",
            "description": "Online payment should be seamless for users and simple to implement for developers. Google Pay can help improve your checkout experience and increase conversions in-app and web. Learn how to integrate Google Pay into your app."
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 8
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsILkNW9d1Jw9rHLAEORuuS-9\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "BWhT5NhJgfoPgozXCvkGCQqwoGQ",
        "id": "PLOU2XLYxmsIJhsF3up2ueu2pRealr9raD",
        "snippet": {
          "publishedAt": "2021-03-30T23:19:19Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google I/O 2021",
          "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google and share feedback and skills through workshops, AMAs, and demos. Watch all the Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/Mlk888FiI8A/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google I/O 2021",
            "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google and share feedback and skills through workshops, AMAs, and demos. Watch all the Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 183
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIJhsF3up2ueu2pRealr9raD\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      },
      {
        "kind": "youtube#playlist",
        "etag": "rfPO83_vLRK4wOIAXHT8oL7a6b0",
        "id": "PLOU2XLYxmsIKSPHI2OlIWH2wbS16iVT8C",
        "snippet": {
          "publishedAt": "2021-03-30T22:38:07Z",
          "channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
          "title": "Google Developers at Google I/O 2021",
          "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google Development, dive deeper into all things Google, and share feedback and skills through workshops, AMAs, and demos. Watch all the Google Developer Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops",
          "thumbnails": {
            "default": {
              "url": "https://i.ytimg.com/vi/D_mVOAXcrtc/default.jpg",
              "width": 120,
              "height": 90
            },
            "medium": {
              "url": "https://i.ytimg.com/vi/D_mVOAXcrtc/mqdefault.jpg",
              "width": 320,
              "height": 180
            },
            "high": {
              "url": "https://i.ytimg.com/vi/D_mVOAXcrtc/hqdefault.jpg",
              "width": 480,
              "height": 360
            },
            "standard": {
              "url": "https://i.ytimg.com/vi/D_mVOAXcrtc/sddefault.jpg",
              "width": 640,
              "height": 480
            },
            "maxres": {
              "url": "https://i.ytimg.com/vi/D_mVOAXcrtc/maxresdefault.jpg",
              "width": 1280,
              "height": 720
            }
          },
          "channelTitle": "Google Developers",
          "localized": {
            "title": "Google Developers at Google I/O 2021",
            "description": "Over the three days of Google I/O 2021, developers and enthusiasts from around the world came together to share the latest in Google Development, dive deeper into all things Google, and share feedback and skills through workshops, AMAs, and demos. Watch all the Google Developer Keynotes, Sessions, workshops, AMAs, and more.\n\nAll Google I/O 2021 Keynotes → https://goo.gle/io21-keynotes\nAll Google I/O 2021 Technical Sessions → https://goo.gle/io21-technicalsessions\nAll Google I/O 2021 Q&As → https://goo.gle/io21-allQAs\nAll Google I/O 2021 Demos → https://goo.gle/io21-alldemos\nAll Google I/O 2021  Workshops → https://goo.gle/io21-workshops"
          }
        },
        "status": {
          "privacyStatus": "public"
        },
        "contentDetails": {
          "itemCount": 40
        },
        "player": {
          "embedHtml": "\u003ciframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/videoseries?list=PLOU2XLYxmsIKSPHI2OlIWH2wbS16iVT8C\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen\u003e\u003c/iframe\u003e"
        }
      }
    ]
  }
  ';


$json=json_decode($jsonA);


dd($json);
});