#ifdef GL_ES
    precision mediump float;
#endif

uniform mat4 cameraProj;
uniform mat4 cameraView;

attribute vec3 position;
attribute vec4 color;

varying vec4 vColor;

void main()
{
    vColor = color;
    gl_Position = cameraProj * cameraView * vec4(position, 1.0);
}