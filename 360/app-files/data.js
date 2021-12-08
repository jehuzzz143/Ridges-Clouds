var APP_DATA = {
  "scenes": [
    {
      "id": "0-the-camp",
      "name": "The Camp",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        }
      ],
      "faceSize": 1024,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -1.673322307365888,
          "pitch": 0.0097572266192536,
          "rotation": 0,
          "target": "4-parking-lot"
        },
        {
          "yaw": -0.5498413342167989,
          "pitch": 0.2957467281165087,
          "rotation": 19.63495408493622,
          "target": "1-stairs"
        }
      ],
      "infoHotspots": [
        {
          "yaw": 0.6465366628272005,
          "pitch": 0.2162208091339881,
          "title": "Twin Ifugao",
          "text": ""
        },
        {
          "yaw": -0.16441394291704015,
          "pitch": 0.11008201183434174,
          "title": "Cabanas",
          "text": ""
        }
      ]
    },
    {
      "id": "1-stairs",
      "name": "Stairs",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        }
      ],
      "faceSize": 1024,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 0.1029164983613331,
          "pitch": 0.2259296979651051,
          "rotation": 0,
          "target": "5-viewdeck"
        },
        {
          "yaw": -3.089376511827531,
          "pitch": -0.2539762315741356,
          "rotation": 0,
          "target": "0-the-camp"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -2.64664764814507,
          "pitch": -0.343903586683874,
          "title": "Standard Cabanas",
          "text": ""
        }
      ]
    },
    {
      "id": "2-second-floor",
      "name": "Second Floor",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        }
      ],
      "faceSize": 1024,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -1.577650356039408,
          "pitch": 0.19670747140317424,
          "rotation": 3.9269908169872414,
          "target": "4-parking-lot"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "3-veranda",
      "name": "Veranda",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        }
      ],
      "faceSize": 1024,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 2.0330202259540915,
          "pitch": 0.04466854108031626,
          "rotation": 11.780972450961727,
          "target": "5-viewdeck"
        },
        {
          "yaw": 2.497900683599946,
          "pitch": -0.13539226214381372,
          "rotation": 7.0685834705770345,
          "target": "1-stairs"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "4-parking-lot",
      "name": "Parking Lot",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        }
      ],
      "faceSize": 1024,
      "initialViewParameters": {
        "yaw": -2.67775067303889,
        "pitch": -0.020526398987362526,
        "fov": 1.2193128577747672
      },
      "linkHotspots": [
        {
          "yaw": 3.10846657850818,
          "pitch": -0.009392769256118427,
          "rotation": 10.210176124166829,
          "target": "6-cafeteria"
        },
        {
          "yaw": 1.9073656860612296,
          "pitch": -0.16742257313228848,
          "rotation": 0,
          "target": "2-second-floor"
        },
        {
          "yaw": -2.735186968268934,
          "pitch": -0.048814437900857044,
          "rotation": 0,
          "target": "0-the-camp"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -3.0588099469237022,
          "pitch": -0.16624150299205454,
          "title": "Reception",
          "text": ""
        },
        {
          "yaw": 2.3860472088432747,
          "pitch": -0.7800111393607914,
          "title": "Overview Spot",
          "text": "Take photos, Hang out, Surprises and etc."
        }
      ]
    },
    {
      "id": "5-viewdeck",
      "name": "Viewdeck",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        }
      ],
      "faceSize": 1024,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -1.3873033720914556,
          "pitch": 0.20323710057327204,
          "rotation": 0,
          "target": "3-veranda"
        },
        {
          "yaw": -2.340308446274433,
          "pitch": -0.23561364855001443,
          "rotation": 0,
          "target": "1-stairs"
        }
      ],
      "infoHotspots": [
        {
          "yaw": -2.1330542330242537,
          "pitch": -0.21175682599430345,
          "title": "&nbsp;Deluxe Cabanas",
          "text": ""
        },
        {
          "yaw": 2.1162646510851655,
          "pitch": 0.15202967335215334,
          "title": "Stand Alone Porch",
          "text": "Place where pool and hot kawa is placed"
        },
        {
          "yaw": 2.916312162914357,
          "pitch": -0.24215626424776815,
          "title": "Twin Ifugao",
          "text": ""
        }
      ]
    },
    {
      "id": "6-cafeteria",
      "name": "Cafeteria",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        }
      ],
      "faceSize": 1024,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 1.3729930339100491,
          "pitch": 0.2647306026129641,
          "rotation": 0,
          "target": "1-stairs"
        },
        {
          "yaw": 3.1280518033940794,
          "pitch": 0.038849400287642055,
          "rotation": 0,
          "target": "4-parking-lot"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "360",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": true,
    "fullscreenButton": true,
    "viewControlButtons": true
  }
};
