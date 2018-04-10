import sublime
import sublime_plugin


class CopyCurFileNameCommand(sublime_plugin.TextCommand):
  def run(self, edit):
    file_path = self.view.file_name();
    file_name_ext = file_path.split('\\')[-1];
    file_name = file_name_ext[0:file_name_ext.rfind('.')]
    # sublime.set_clipboard(file_name)
    print('文件名称不带后缀',file_name)

class CopyCurFileNameWithExtensionCommand(sublime_plugin.TextCommand):
  def run(self, edit):
    file_path = self.view.file_name();
    file_name_ext = file_path.split('\\')[-1];
    sublime.set_clipboard(file_name_ext)
    print('文件名称带后缀名',file_name_ext)

class CopyCurFilePathCommand(sublime_plugin.TextCommand):
  def run(self, edit):
    file_path = self.view.file_name();
    sublime.set_clipboard(file_path)
    print('文件绝对路径',file_path)
