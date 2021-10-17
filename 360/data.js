var APP_DATA = {
  "scenes": [
    {
      "id": "0-pool",
      "name": "Pool",
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
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -1.2490201620706554,
          "pitch": -0.15473112351400076,
          "rotation": 0,
          "target": "2-overview"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "1-beach",
      "name": "Beach",
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
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "yaw": -1.2019657553784118,
        "pitch": -0.26780255563900823,
        "fov": 1.3333127936580627
      },
      "linkHotspots": [
        {
          "yaw": -1.493491627888698,
          "pitch": -0.19030691867798666,
          "rotation": 0,
          "target": "2-overview"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-overview",
      "name": "Overview",
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
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 1.776567964751175,
          "pitch": 0.5680168951539457,
          "rotation": 0,
          "target": "0-pool"
        },
        {
          "yaw": 2.342519353140877,
          "pitch": 0.849797029635937,
          "rotation": 0,
          "target": "1-beach"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "3d1",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": false,
    "fullscreenButton": true,
    "viewControlButtons": false
  }
};
